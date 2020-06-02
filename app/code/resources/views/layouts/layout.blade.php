<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/pace.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Querido diário</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendors/feather-icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/diario.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
</head>

<body class="sidebar-dark sidebar-expand navbar-brand-dark header-light">
<div id="wrapper" class="wrapper">
    <!-- HEADER & TOP NAVIGATION -->
    <nav class="navbar">
        <!-- Logo Area -->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img class="logo-expand" alt="" src="{{asset('assets/img/logo-dark.png')}}">
                <img class="logo-collapse" alt="" src="{{asset('assets/img/logo-collapse.png')}}">
                <!-- <p>BonVue</p> -->
            </a>
        </div>
        <!-- /.navbar-header -->
        <!-- Left Menu & Sidebar Toggle -->
        <ul class="nav navbar-nav">
            <li class="sidebar-toggle dropdown"><a href="javascript:void(0)" class="ripple"><i class="feather feather-menu list-icon fs-20"></i></a>
            </li>
        </ul>
        <!-- /.navbar-left -->
        <!-- Search Form -->
        <form class="navbar-search d-none d-sm-block" role="search"><i class="feather feather-search list-icon"></i>
            <input type="search" class="search-query" placeholder="Search anything..."> <a href="javascript:void(0);" class="remove-focus"><i class="feather feather-x"></i></a>
        </form>
        <!-- /.navbar-search -->
        <div class="spacer"></div>
        <!-- Right Menu -->
        <ul class="nav navbar-nav d-none d-lg-flex ml-2 ml-0-rtl">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-bell list-icon"></i> <span class="button-pulse bg-danger"></span></a>
                <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                    <div class="card">
                        <header class="card-header d-flex justify-content-between mb-0"><a href="javascript:void(0);"><i class="feather feather-bell color-primary" aria-hidden="true"></i></a>  <span class="heading-font-family flex-1 text-center fw-400">Notifications</span>  <a href="javascript:void(0);"><i class="feather feather-settings color-content"></i></a>
                        </header>
                        <ul class="card-body list-unstyled dropdown-list-group">
                            <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">check</i> </span><span class="media-body"><span class="heading-font-family media-heading">Invitation accepted</span> <span class="media-content">Your have been Invited ...</span></span></a>
                            </li>
                            <li><a href="#" class="media"><span class="d-flex thumb-xs user--online"><img src="{{asset('assets/demo/users/user3.jpg')}}" class="rounded-circle" alt=""> </span><span class="media-body"><span class="heading-font-family media-heading">Steve Smith</span> <span class="media-content">I slowly updated projects</span></span></a>
                            </li>
                            <li><a href="#" class="media"><span class="d-flex"><i class="material-icons list-icon">event_available</i> </span><span class="media-body"><span class="-heading-font-family media-heading">To Do</span> <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span></span></a>
                            </li>
                        </ul>
                        <!-- /.dropdown-list-group -->
                        <footer class="card-footer text-center"><a href="javascript:void(0);" class="headings-font-family text-uppercase fs-13">See all activity</a>
                        </footer>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.dropdown-menu -->
            </li>
            <!-- /.dropdown -->
            <li><a href="javascript:void(0);" class="right-sidebar-toggle"><i class="feather feather-settings list-icon"></i></a>
            </li>
        </ul>
        <!-- /.navbar-right -->
        <!-- User Image with Dropdown -->

        <!-- /.navbar-nav -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- User Details -->
            <div class="side-user d-none">
                <div class="col-sm-12 text-center p-0 clearfix">
                    <div class="d-inline-block pos-relative mr-b-10">
                        <figure class="thumb-sm mr-b-0 user--online">
                            <img src="{{asset('assets/demo/users/user1.jpg')}}" class="rounded-circle" alt="">
                        </figure><a href="page-profile.html" class="text-muted side-user-link"><i class="feather feather-settings list-icon"></i></a>
                    </div>
                    <!-- /.d-inline-block -->
                    <div class="lh-14 mr-t-5"><a href="page-profile.html" class="hide-menu mt-3 mb-0 side-user-heading fw-500">Scott Adams</a>
                        <br><small class="hide-menu">Developer</small>
                    </div>
                </div>
                <!-- /.col-sm-12 -->
            </div>
            <!-- /.side-user -->
            <!-- Call to Action -->

            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="{{ Route::currentRouteName() == 'home' ? 'active ' : ''}}">
                        <a href="{{route('home')}}">
                            <i class="list-icon feather feather-command"></i>
                            <span class="hide-menu">Home</span>
                        </a>
                    </li>
                    <li class="current-page menu-item-has-children">
                        <a href="{{route('anotacoes.index')}}">
                            <i class="list-icon feather feather-command"></i>
                            <span class="hide-menu">Anotações</span>
                        </a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="{{route('anotacoes.create')}}">Criar nova</a></li>
                            <li><a href="{{route('anotacoes.index')}}">Listar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Registros de crise</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="{{route('registro.crises.create')}}">Criar nova</a>
                            </li>
                            <li><a href="{{route('registro.crises.index')}}">Listar</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('exercicios.index')}}">
                            <i class="list-icon feather feather-command"></i>
                            <span class="hide-menu">Exercícios</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                            <i class="list-icon feather feather-user"></i>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>
        <!-- /.site-sidebar -->

        <!-- /.main-wrappper -->
    </div>
    <!-- /.content-wrapper -->
    <main class="main-wrapper clearfix">
        @yield('content')
    </main>
</div>
<!--/ #wrapper -->
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>

</html>
