<?php

namespace App\Http\Controllers;

use App\Services\RegistroService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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

        $cacheKey = 'REGISTROS_CRISES_USUARIO_'.auth()->user()->id;

        if (Cache::has($cacheKey)){

            $registros = Cache::get($cacheKey);

        }else{

            $registros = $this->registroService->getRegistros();

            if($registros->isNotEmpty()){

                Cache::add($cacheKey, $registros, Carbon::now()->addHours(2));
            }
        }

        return view('registros.index')->with([
            'registros' => $registros
        ]);
    }

    public function create(){

        return view('registros.create');
    }

    public function store(Request $request){

        $retorno = $this->registroService->store($request->all());

        $cacheKey = 'REGISTROS_CRISES_USUARIO_'.auth()->user()->id;

        if(Cache::has($cacheKey)){
            Cache::forget($cacheKey);
        }

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
