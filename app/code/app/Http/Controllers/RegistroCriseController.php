<?php

namespace App\Http\Controllers;

use App\Services\RegistroService;
use Illuminate\Http\Request;

class RegistroCriseController extends Controller
{
    //
    /**
     * @var RegistroService
     */
    private $registroService;

    /**
     * RegistroCriseController constructor.
     */
    public function __construct(RegistroService $registroService)
    {
        $this->registroService = $registroService;
    }

    public function index(){

        $registros = $this->registroService->getRegistros();

        return view('registros.index')->with([
            'registros' => $registros
        ]);
    }

    public function create(){

        return view('registros.create');
    }
}
