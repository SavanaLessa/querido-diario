<?php

namespace App\Services;
use App\Repository\AnotacoesRepository;

class AnotacoesService
{
    /**
     * @var AnotacoesRepository
     */
    private $anotacoesRepository;


    /**
     * AnotacoesService constructor.
     */
    public function __construct(AnotacoesRepository $anotacoesRepository)
    {
        $this->anotacoesRepository = $anotacoesRepository;
    }

    public function getAllAnotacoes(){

        return $this->anotacoesRepository->getAnotacoesUsuario();
    }

    public function store($anotacao){

        return $this->anotacoesRepository->store($anotacao);
    }
}
