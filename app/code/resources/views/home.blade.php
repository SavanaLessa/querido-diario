@extends('layouts.layout')

@section('content')

        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Bem vindo, </h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block">{{auth()->user()->name}}</p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{route('home')}}">Home</a>
                    </li>
                </ol>
            </div>
            <!-- /.page-title-right -->
        </div>
        <!-- /.page-title -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="widget-list">
            <div class="row">
                <div class="col-md-12 widget-holder">
                    <div class="widget-bg carousel-diario">
                        <div class="widget-body clearfix">
                            <div class="carousel" data-slick='{"slidesToShow":1, "autoplay": true, "infinite": true, "speed": 2000, "fade": true, "dots": true, "infinite": true }'>
                                <div>
                                    <img src="assets/demo/carousel/carousel-10.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <div class="mensagem-text">
                                                <h1 class="mensagem-text">Sua depressão não é preguiça. Sua ansiedade não é frescura. Você é forte e sobreviveu a todos os momentos ruins. E apesar de enfrentar tudo isso, você ainda vai fazer grandes coisas.</h1>
                                                <h5 class="mensagem-text">@ansiedade.não</h5>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-11.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <div class="mensagem-text">
                                                <h1 class="mensagem-text">Um dia, quando olhares para trás, verás que os dias mais belos foram aqueles em que lutaste.</h1>
                                                <h5 class="mensagem-text">Sigmund Freud</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-12.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <div class="mensagem-text">
                                                <h1 class="mensagem-text">Entre o caminho da razão e o do coração, escolha o caminho do meio, o caminho do equilíbrio.</h1>
                                                <h5 class="mensagem-text">Eduardo Shinyashiki</h5>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-13.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <div class="mensagem-text">
                                                <h1 class="mensagem-text">Você está evoluindo, acredite em si mesmo. Apesar dos dias parecerem tempestades sem fim, você é forte. Você conseguirá!</h1>
                                                <h5 class="mensagem-text">Belas mensagens</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-14.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <div class="mensagem-text">
                                                <h1 class="mensagem-text">Um pensamento positivo pela manhã, pode mudar todo o seu dia!</h1>
                                                <h5 class="mensagem-text">Fitebelablog</h5>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.widget-list -->



@endsection
