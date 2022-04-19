@extends('layouts.app2')
@section('bgclass', 'login-page login-bg')
@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>HELTE</b> POS</a>
        </div>
        <div class="card-body">
            <div class="container">
            <div class="row">
            {{-- @if(Session('authFailed')) --}}
            <div class="authFailedAlert alert alert-danger alert-dismissible text-center d-none ">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <p class="authFailed"></p>
                {{-- {{ Session()->get('authFailed') }} --}}
            </div>
            {{-- @endif --}}
            @if (Session('loginFailed'))
                <div class="alert alert-danger alert-dismissible bg-danger text-white fade show align-content-center text-center RequestStatusAlert animate__animated animate__backInDown"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong class="d-flex">
                        <div class="col-2 flex center">
                            <img class="imgStatus" src="{{ asset('images/info/notice-error.png') }}">
                        </div>
                        <div class="col-10 mx-0 text-white">
                            <p class="responseText text-white">
                                {{ Session()->get('loginFailed') }}
                            </p>
                        </div>
                    </strong>
                </div>
                @endif

            </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="login-box-msg">Welcome you Back, Kindly Login</p>
                        <form method="POST" action="{{ route('login') }}" id="LoginForm">
                        @csrf
                            <div class="input-group mb-3">
                                <input name="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Enter your Email or Username" value="{{ old('username') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input name="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row mx-autos">
                                <div class="col-mg-12">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mx-auto">
                                    <button type="submit" class="btnlogin btn btn-primary btn-block btn-lg">
                                        <span>{!! __('Login') !!}</span>
                                            <i class="fas fa-spinner fa-spin ml-3 d-none login-spin"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="mb-1 mx-auto">
                            <a href="#">I forgot my password</a>
                        </p>
                        <p class="mb-0 mx-auto">
                            <a href="#" class="text-center mx-auto">Register a new membership</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
