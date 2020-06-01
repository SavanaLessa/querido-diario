<?php


namespace App\Repository;


use App\Models\RegistroCrises;
use Carbon\Carbon;
use Exception;

class RegistroRepository
{
    /**
     * @var RegistroCrises
     */
    private $registroCrises;


    /**
     * RegistroRepository constructor.
     */
    public function __construct(RegistroCrises $registroCrises)
    {
        $this->registroCrises = $registroCrises;
    }

    public function getAll(){

        $registros = $this->registroCrises->query()
            ->where('user_id', '=', auth()->user()->id)
            ->paginate(5);

        return $registros;
    }

    public function store($registro){
        try {

            $obj = new RegistroCrises();
            $obj->user_id = auth()->user()->id;
            $obj->data_hora = Carbon::now()->format('Y-m-d H:i:s');
            $obj->uuid = \Webpatser\Uuid\Uuid::generate(4)->string;
            $obj->assunto = $registro['assunto'];
            $obj->sintomas = $registro['sintomas'];
            $obj->duracao = $registro['duracao'].'-'.$registro['tempo'];
            $obj->descricao = $registro['descricao'];
            $obj->motivos = $registro['motivos'];
            $obj->save();

            return [
                'success' => true,
                'msg' => 'Registro criado com sucesso!'
            ];

        }catch (Exception  $e){

            return [
                'error' => true,
                'msg' => "Houve um erro ao salvar o registro, Veja: {$e->getMessage()}"
            ];
        }
    }

    public function getRegistro($uuid){

        $registro = $this->registroCrises->query()
            ->where('user_id', '=', auth()->user()->id)
            ->where('uuid', '=', $uuid)
            ->first();

        return $registro;
    }
}
