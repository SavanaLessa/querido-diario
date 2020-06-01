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

    public function store(Request $request){

        $retorno = $this->registroService->store($request->all());

        if(!isset($retorno['error'])){
            return redirect()->route('registro.crises.index')->with('success', 'Registro cadastrado com sucesso.');
        }else{
            return redirect()->route('registro.crises.index')->with('error', $retorno['msg']);
        }
    }

    public function show($uuid){

        $registro = $this->registroService->show($uuid);

        return view('registros.show')->with([
            'registroSelecionado' => $registro
        ]);
    }
}
