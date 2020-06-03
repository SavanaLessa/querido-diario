@extends('layouts.layout')

@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Novo registro</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('registro.crises.index')}}">Registro de crises</a></li>
                <li class="breadcrumb-item active">Nova</li>
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
                                        <input class="form-control" id="assunto" name="assunto" placeholder="Assunto..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sintomas">Sintomas</label>
                                        <input class="form-control" id="sintomas" name="sintomas" placeholder="Sintomas..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="duracao">Duração</label>
                                        <input class="form-control" id="duracao" name="duracao" placeholder="Duração..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="tempo">Tempo</label>
                                        <select name="tempo" id="tempo" class="form-control select2" required="required">
                                            <option value="">Selecione</option>
                                            <option value="minutos">Minutos</option>
                                            <option value="horas">Horas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="motivos">Motivo</label>
                                        <input class="form-control" id="motivos" name="motivos" placeholder="Motivo..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions btn-list">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                                <a class="btn btn-outline-default" href="{{route('registro.crises.create')}}">Cancelar</a>
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
