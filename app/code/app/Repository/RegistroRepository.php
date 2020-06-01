<?php


namespace App\Repository;


use App\Models\RegistroCrises;

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
}
