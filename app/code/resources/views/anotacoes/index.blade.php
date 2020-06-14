@extends('layouts.layout')

@section('content')

<!-- Page Title Area -->
<div class="row page-title clearfix">
    <div class="page-title-left">
        <h6 class="page-title-heading mr-0 mr-r-5">Anotações</h6>
        <p class="page-title-description mr-0 d-none d-md-inline-block">Confira todas as suas anotações</p>
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
                                    <a href="{{route('anotacoes.create')}}" class="btn btn-primary btn-sm fs-14">Adicionar anotação</a>
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
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($anotacoes as $anotacao)
                                    <tr>
                                        <td>
                                            <input name="uuid" class="td_item" value="{{$anotacao->uuid}}" nome="{{$anotacao->titulo}}" type="checkbox">
                                        </td>
                                        <td><a href="{{route('anotacoes.show', $anotacao->uuid)}}">{{$anotacao->assunto}}</a></td>
                                        <td>{{$anotacao->created_at}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Nenhuma anotação encontrada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </form>


                    <div class="row">
                        <div class="col-7 mt-1">
                            <span class="headings-font-family">
                                Exibindo de {{ $anotacoes->firstItem() }} à {{ $anotacoes->lastItem() }} de <b>{{ $anotacoes->total() }}</b> registros
                            </span>
                        </div>

                        <div class="col-5">
                            <div class="btn-group float-right">
                                {{ $anotacoes->links() }}
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
