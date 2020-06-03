@extends('layouts.login')

@section('content')
    <div class="login-center">
        <div class="navbar-header text-center mt-2 mb-4">
            <a href="index.html">
                <img alt="" src="assets/img/Imagens.png" width="150px">
            </a>
        </div>
        <!-- /.navbar-header -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="emails@example.com" class="form-control form-control-line" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="password" id="password" name="password" class="form-control form-control-line">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit">Login</button>
            </div>
            <div class="form-group no-gutters mb-0">
                <div class="col-md-12 d-flex">
                    <div class="checkbox checkbox-primary mr-auto mr-0-rtl ml-auto-rtl">
                        <label class="d-flex">
                            <input type="checkbox"> <span class="label-text">Lembrar-me</span>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" id="to-recover" class="my-auto pb-2 text-right"><i class="material-icons mr-2 fs-18">lock</i> Esqueceu sua senha?</a>
                    @endif
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.form-group -->
        </form>
        <!-- /.form-material -->
        <hr>

        <!-- /.btn-list -->
        <footer class="col-sm-12 text-center">
            <hr>
            @if (Route::has('register'))
                <li class="nav-item">
                    <p>Ainda não possui uma conta? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Registre-se</b></a>
                </li>
            @endif
        </footer>
    </div>
@endsection
