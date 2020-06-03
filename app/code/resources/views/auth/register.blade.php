@extends('layouts.register')

@section('content')
    <div class="navbar-header text-center mt-2 mb-4">
        <a href="index.html">
            <img alt="" src="assets/img/Imagens.png" width="150px">
        </a>
    </div>
    <!-- /.navbar-header -->
    <h5><a href="javascript:void(0);">Registre-se</a></h5>
    <p>Para se registrar, é necessário preencher o formulário abaixo e ter um e-mail válido!.</p>
    <form id="loginform" action="{{route('register')}}">
        @csrf
        @method('POST')
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" type="text" required="" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" required="" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input class="form-control" type="password" required="" placeholder="Senha">
        </div>
        <div class="form-group">
            <label>Confirme sua senha</label>
            <input class="form-control" type="password" required="required" placeholder="Confirme sua senha">
        </div>
        <div class="form-group no-gutters mb-3">
            <div class="checkbox checkbox-primary">
                <label>
                    <input type="checkbox" required="required"> <span class="label-text">Eu aceito todos os termos e <a href="#">Terms &amp; Conddições</a></span>
                </label>
            </div>
            <!-- /.checkbox -->
        </div>
        <!-- /.form-group -->
        <div class="form-group text-center no-gutters mb-4">
            <button class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit">Registre-se</button>
        </div>
        <!-- /.btn-list -->
    </form>
    <!-- /.form-horzontal -->
    <footer class="col-sm-12 text-center">
        <hr>
        <p>Já possui uma conta? <a href="{{route('login')}}" class="text-primary m-l-5"><b>Faça Login</b></a>
        </p>
    </footer>
@endsection
