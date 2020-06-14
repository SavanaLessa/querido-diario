@extends('layouts.layout')

@section('content')

    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Registros de crises</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Anotações</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->

    @if (session('success'))
        <div class="alert alert-success">
            <i class="icone-ok-3"></i>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            <i class="icone-failed"></i>
            {{ session('status') }}
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-success">
            <i class="icone-ok-3"></i>
            A anotação <b>{{ session('deleted') }}</b> foi excluído(a).
        </div>
    @endif

    <!-- =================================== -->
    <!-- Different data widgets ============ -->
    <!-- =================================== -->
    <div class="widget-list">
        <div class="row">
            <div class="widget-holder col-md-12">
                <div class="widget-bg">
                    <div class="widget-body">

                        <div class="mail-inbox-header">
                            <div class="col-md-6">
                                <div class="mail-inbox-tools d-flex align-items-center">

                                    <div class="d-none d-sm-block text-right mr-r-20">
                                        <a href="{{route('registro.crises.create')}}" class="btn btn-primary btn-sm fs-14">Adicionar registro</a>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.mail-inbox-tools -->
                            </div>
                        </div>

                        <form method="post" id="lista_cadastros">
                            {{ csrf_field() }}
                            <table class="table table-hover" id="tabela_clientes">
                                <thead>
                                <tr>
                                    <th class="txt-center" style="width: 15px;">
                                        <input type="checkbox" class="selecionaTodos">
                                    </th>
                                    <th>Assunto</th>
                                    <th>Sintomas</th>
                                    <th>Motivos</th>
                                    <th>Duração</th>
                                    <th>Data</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($registros as $registro)
                                    <tr>
                                        <td>
                                            <input name="uuid" class="td_item" value="{{$registro->uuid}}" nome="{{$registro->assunto}}" type="checkbox">
                                        </td>
                                        <td><a href="{{route('registro.crises.show', $registro->uuid)}}">{{$registro->assunto}}</a></td>
                                        <td>{{$registro->sintomas}}</td>
                                        <td>{{$registro->motivos}}</td>
                                        <td>{{$registro->duracao}}</td>
                                        <td>{{$registro->data_hora}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Nenhum registro encontrado</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </form>


                        <div class="row">
                            <div class="col-7 mt-1">
                            <span class="headings-font-family">
                                Exibindo de {{ $registros->firstItem() }} à {{ $registros->lastItem() }} de <b>{{ $registros->total() }}</b> registros
                            </span>
                            </div>

                            <div class="col-5">
                                <div class="btn-group float-right">
                                    {{ $registros->links() }}
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.widget-body -->
                </div>
                <!-- /.widget-bg -->
            </div>
            <!-- /.widget-holder -->
        </div>
        <!-- /.row -->
    </div>

    <!-- /.widget-list -->

@endsection
