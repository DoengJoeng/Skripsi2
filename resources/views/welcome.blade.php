@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <div class="card card-login mb-3">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">
                                <strong>  sistem Pakar</strong> <h5>Bimbingan Konselling</h5>
                            </h4>
                        </div>
                        <div class="card-body login-card-body">
                            @if(\Session::has('message'))
                                <p class="alert alert-info">
                                    {{ \Session::get('message') }}
                                </p>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="email" name="email" value="{{ old('email', null) }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="password" name="password">
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-lg">login</button>
                                    <a href="{{ url('/register') }}">belum punya akun?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
