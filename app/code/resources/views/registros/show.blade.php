@extends('layouts.layout')

@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Registros</h6>
            <p class="page-title-description mr-0 d-none d-md-inline-block">#{{$registroSelecionado->assunto}}</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('registro.crises.index')}}">Registro de crises</a></li>
                <li class="breadcrumb-item active">Editar</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>

    <div class="widget-list ">
        <div class="row">
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-body clearfix">
                        <form action="{{route('registro.crises.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="assunto">Assunto</label>
                                        <input disabled="disabled" class="form-control" id="assunto" value="{{$registroSelecionado->assunto}}" name="assunto" placeholder="Assunto..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sintomas">Sintomas</label>
                                        <input disabled="disabled" class="form-control" id="sintomas" value="{{$registroSelecionado->sintomas}}" name="sintomas" placeholder="Sintomas..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="duracao">Duração</label>
                                        <input disabled="disabled" class="form-control" id="duracao" value="{{$registroSelecionado->duracao}}" name="duracao" placeholder="Duração..." type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea disabled="disabled" class="form-control" id="descricao" name="descricao" rows="3">{{$registroSelecionado->descricao}}</textarea>
                            </div>
                            <div class="form-actions btn-list">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                                <a class="btn btn-outline-default" href="{{route('registro.crises.index')}}">Voltar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
        </div>
    </div>
@endsection
