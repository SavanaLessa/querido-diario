<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    //

    public function index(){

        return view('exercicios.index');
    }
}
