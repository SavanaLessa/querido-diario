@extends('layouts.login')

@section('content')
    <div class="login-center">
        <div class="navbar-header text-center mt-2 mb-4">
            <a href="index.html">
                <img alt="" src="assets/img/logo-light.png">
            </a>
        </div>
        <!-- /.navbar-header -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="johndoe@site.com" class="form-control form-control-line" name="email" id="email">
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
                            <input type="checkbox"> <span class="label-text">Remember me</span>
                        </label>
                    </div><a href="javascript:void(0)" id="to-recover" class="my-auto pb-2 text-right"><i class="material-icons mr-2 fs-18">lock</i> Forgot Password?</a>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.form-group -->
        </form>
        <!-- /.form-material -->
        <hr>
        <div class="row btn-list">
            <div class="col-md-6">
                <button type="button" class="btn btn-block btn-facebook ripple" data-toggle="tooltip" data-placement="top" title="Login with Facebook"><i class="social-icons list-icon">facebook</i> facebook</button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-block btn-googleplus ripple" data-toggle="tooltip" data-placement="top" title="Login with Google"><i class="social-icons list-icon">googleplus</i> google</button>
            </div>
        </div>
        <!-- /.btn-list -->
        <footer class="col-sm-12 text-center">
            <hr>
            <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
            </p>
        </footer>
    </div>
@endsection
