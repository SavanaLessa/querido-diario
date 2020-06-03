@extends('layouts.layout')

@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Nova anotação</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('anotacoes.index')}}">Anotações</a></li>
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
                        <form action="{{route('anotacoes.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="assunto">Assunto</label>
                                        <input class="form-control" id="assunto" name="assunto" placeholder="Assunto..." type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="anotacao">Anotação</label>
                                <textarea class="form-control" id="anotacao" name="anotacao" rows="3"></textarea>
                            </div>
                            <div class="form-actions btn-list">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                                <a class="btn btn-outline-default" href="{{route('anotacoes.create')}}">Cancelar</a>
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
