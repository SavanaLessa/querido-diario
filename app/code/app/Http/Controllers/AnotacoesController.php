<?php

namespace App\Http\Controllers;

use App\Services\AnotacoesService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class AnotacoesController extends Controller
{
    //
    /**
     * @var AnotacoesService
     */
    private $anotacoesService;


    /**
     * AnotacoesController constructor.
     */
    public function __construct(AnotacoesService $anotacoesService)
    {
        $this->anotacoesService = $anotacoesService;
    }

    public function index(){

        $cacheKey = 'ANOTACOES_USUARIO_'.auth()->user()->id;

        if(Cache::has($cacheKey)){

            $anotacoes =  Cache::get($cacheKey);

        }else{

            $anotacoes = $this->anotacoesService->getAllAnotacoes();

            if($anotacoes->isNotEmpty()){

                Cache::add($cacheKey, $anotacoes, Carbon::now()->addHours(2));
            }
        }

        return view('anotacoes.index')->with([
            'anotacoes' => $anotacoes
        ]);
    }

    public function create(){

        return view('anotacoes.create');
    }

    public function store(Request $request){

        $retorno =  $this->anotacoesService->store($request->all());

        $cacheKey = 'ANOTACOES_USUARIO_'.auth()->user()->id;

        if(Cache::has($cacheKey)){
            Cache::forget($cacheKey);
        }

        if(!isset($retorno['error'])){
            return redirect()->route('anotacoes.index')->with('success', 'Anotação cadastrada com sucesso.');
        }else{
            return redirect()->route('anotacoes.index')->with('error', $retorno['msg']);
        }

    }

}
