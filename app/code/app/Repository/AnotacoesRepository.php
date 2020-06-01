<?php

namespace App\Repository;
use App\Models\Anotacoes;
use Carbon\Carbon;
use Exception;

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

    public function store($anotacao){

        try {

            $obj = new Anotacoes();
            $obj->user_id = auth()->user()->id;
            $obj->assunto = $anotacao['assunto'];
            $obj->anotacao = $anotacao['anotacao'];
            $obj->anotacao = Carbon::now()->format('Y-m-d H:i:s');
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
