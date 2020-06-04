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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name">{{ __('Nome') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="email">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password">{{ __('Senha') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group row">
            <label for="password-confirm">{{ __('Confirme sua senha') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        </div>

        <div class="form-group text-center no-gutters mb-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Registre-se') }}
            </button>
        </div>
    </form>
    <!-- /.form-horzontal -->
    <footer class="col-sm-12 text-center">
        <hr>
        <p>Já possui uma conta? <a href="{{route('login')}}" class="text-primary m-l-5"><b>Faça Login</b></a>
        </p>
    </footer>
@endsection
