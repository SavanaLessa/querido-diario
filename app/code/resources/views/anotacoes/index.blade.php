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

                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-link fs-14 mr-2">
                                        <i class="list-icon fs-18 mr-r-5 fa fa-upload" style="margin-top: 5px;"></i> <strong>Importar</strong>
                                    </a>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-sm fs-14 fw-semibold btn-link dropdown-toggle headings-color">
                                            <i class="feather feather-more-vertical text-muted fs-18 mr-2"></i> Ações
                                        </a>
                                        <div role="menu" class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">Exportar para PDF</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Exportar para CSV</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-red" rel="excluirClientes"  href="javascript:void(0)">Remover</a>
                                        </div>
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.mail-inbox-tools -->
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-8 d-inline-block text-right">
                                <form action="" method="get">
                                    {{ csrf_field() }}

                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control fs-14 input_busca" id="l8" name="busca" placeholder="Buscar anotações..." type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary fs-14">Buscar</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                            <input name="uuid" class="td_item" value="" nome="" type="checkbox">
                                        </td>
                                        <td><a href="">{{$anotacao->assunto}}</a></td>
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
