@extends('layouts.layout')

@section('content')
    <main class="main-wrapper clearfix">
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
                    <div class="widget-bg">
                        <div class="widget-body clearfix">
                            <div class="carousel" data-slick='{"slidesToShow":1, "autoplay": true, "infinite": true, "speed": 2000, "fade": true, "dots": true, "infinite": true }'>
                                <div>
                                    <img src="assets/demo/carousel/carousel-10.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <h6>Inspiration and Design</h6>
                                            <h3>A Piece of Green</h3>
                                            <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-11.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <h6>LifeStyle</h6>
                                            <h3>Balanced</h3>
                                            <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-12.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <h6>Travel</h6>
                                            <h3>A Trip to Unknown</h3>
                                            <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-13.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <h6>Inspiration and Design</h6>
                                            <h3>A Piece of Green</h3>
                                            <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/demo/carousel/carousel-14.jpeg" alt="">
                                    <div class="carousel-caption single-item-caption d-none d-sm-block">
                                        <div class="single-item-caption-inside">
                                            <h6>Lifestyle</h6>
                                            <h3>Whatever it takes.</h3>
                                            <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
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
    </main>


@endsection
