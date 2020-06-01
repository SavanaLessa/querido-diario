<?php


namespace App\Services;


use App\Repository\RegistroRepository;

class RegistroService
{
    /**
     * @var RegistroRepository
     */
    private $registroRepository;


    /**
     * RegistroService constructor.
     */
    public function __construct(RegistroRepository $registroRepository)
    {
        $this->registroRepository = $registroRepository;
    }

    public function getRegistros(){

        return $this->registroRepository->getAll();
    }
}
