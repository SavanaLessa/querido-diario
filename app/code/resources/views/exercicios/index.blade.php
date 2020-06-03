@extends('layouts.layout')

@section('content')
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Exercícios</h6>
            <p class="page-title-description mr-0 d-none d-md-inline-block">Confira todas os exercícios feitos para você!</p>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Exercícios</li>
            </ol>
        </div>
        <!-- /.page-title-right -->
    </div>
    <!-- /.page-title -->

    <div class="widget-list">
        <div class="row">
            <div class="widget-holder col-md-12">
                <div class="widget-bg">
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top " src="{{asset('assets/img/Perder-Peso.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Respiração Rápida</h5>
                                        <p class="card-text">Um rápido exercício de respiração, para lhe deixar relaxado e calmo.</p>
                                        <a href="#" id="btn-modal-fast" class="btn btn-primary" data-toggle="modal" data-target="#modal-fast">Vamos lá?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top " src="{{asset('assets/img/woman-meditation.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Respiração Profunda</h5>
                                        <p class="card-text">Um exercício de respiração profunda, para lhe deixar relaxado e calmo.</p>
                                        <a href="#" id="btn-modal-slow" class="btn btn-primary" data-toggle="modal" data-target="#modal-slow">Vamos lá?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center widget-holder">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" width="100%" src="{{asset('assets/img/men-meditation.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Vídeo Relaxante</h5>
                                        <p class="card-text">Assista a um vídeo com sons e imagens relaxantes...</p>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-video">Vamos lá?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-fastLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <iframe id="video-modal" class="video-relax" height="400" src="https://www.youtube.com/embed/SJ3u9dOcpbE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                        <!-- /.widget-body -->
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" id="btn-modal-close-video" class="btn btn-secondary stop-video">Fechar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-fast" tabindex="-1" role="dialog" aria-labelledby="modal-fastLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Controle sua respiração</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center div-inspire" hidden="hidden">
                                <h5>Inspire...</h5>
                            </div>
                            <div class="text-center div-secure" hidden="hidden">
                                <h5>Segure...</h5>
                            </div>
                            <div class="text-center div-expire" hidden="hidden">
                                <h5>Expire...</h5>
                            </div>
                            <div class="circulo secondary text-center">
                                <h1 class="contador"></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-fast" class="btn btn-primary">Clique para começar</button>
                    <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-slow" tabindex="-1" role="dialog" aria-labelledby="modal-slowLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Controle sua respiração</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center" id="div-inspire-slow" hidden="hidden">
                                <h5>Inspire...</h5>
                            </div>
                            <div class="text-center" id="div-secure-slow" hidden="hidden">
                                <h5>Segure...</h5>
                            </div>
                            <div class="text-center" id="div-expire-slow" hidden="hidden">
                                <h5>Expire...</h5>
                            </div>
                            <div class="circulo secondary text-center">
                                <h1 class="contador" id="contador-slow" "></h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-slow" class="btn btn-primary">Clique para começar</button>
                    <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/exercicios.js')}}"></script>
@endsection
