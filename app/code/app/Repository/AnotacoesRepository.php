<?php

namespace App\Repository;
use App\Models\Anotacoes;
use Carbon\Carbon;
use Exception;
use Ramsey\Uuid\Uuid;

class AnotacoesRepository
{
    /**
     * @var Anotacoes
     */
    private $anotacoes;


    /**
     * AnotacoesRepository constructor.
     */
    public function __construct(Anotacoes $anotacoes)
    {
        $this->anotacoes = $anotacoes;
    }

    public function getAnotacoesUsuario(){

        $anotacoes = $this->anotacoes->query()
            ->where('user_id', '=', auth()->user()->id)
            ->paginate(5);

        return $anotacoes;
    }

    public function getAnotacao($uuid){

        $anotacao = $this->anotacoes->query()
            ->where('uuid', '=', $uuid)
            ->first();

        return $anotacao;
    }

    public function store($anotacao){

        try {

            $obj = new Anotacoes();
            $obj->user_id = auth()->user()->id;
            $obj->assunto = $anotacao['assunto'];
            $obj->anotacao = $anotacao['anotacao'];
            $obj->data_hora = Carbon::now()->format('Y-m-d H:i:s');
            $obj->uuid = \Webpatser\Uuid\Uuid::generate(4)->string;
            $obj->save();

            return [
                'success' => true,
                'msg' => 'Anotação criada com sucesso!'
            ];

        }catch (Exception $e){

            return [
                'error' => true,
                'msg' => "Houve um erro ao salvar a anotação, Veja: {$e->getMessage()}"
            ];
        }

    }
}
