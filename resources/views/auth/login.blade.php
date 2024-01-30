@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary1 p-4">
                                    <h5 class="text-primary1">Welcome Back !
                                    </h5>
                                    <p>Sign in to CargoMax.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="/assets/images/delivery3.png" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span
                                        class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo2.png"
                                            alt="" class="" height="34">
                                    </span>
                                </div>
                            </a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span
                                        class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo2.png"
                                            alt="" class="" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <!-- @if(session('mssg'))
                                <div class="alert alert-{{session('mssg')['0']}}">
                                    <p class="mssg">{{session('mssg')['1']}}</p>
                                </div>
                                @else
                                @endif -->

                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                            <form class="form-horizontal"
                                action="{{ url('/admin/login') }}"
                                method="POST">

                                @csrf
                                <div class="mb-3">
                                    <label for="email"
                                        class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        class="form-label">{{ __('Password') }}</label>
                                    <div
                                        class="input-group auth-pass-inputgroup">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback"
                                            role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <button class="btn btn-light "
                                            type="button" id="password-addon"><i
                                                class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                        type="checkbox" name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="remember-check">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button
                                        class="btn btn-primary waves-effect waves-light"
                                        type="submit">{{ __('Login') }}</button>
                                </div>

                                <div class="mt-4 text-center">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-muted"><i
                                            class="mdi mdi-lock me-1"></i>
                                        {{ __('Forgot Your Password?') }}</a>
                                    @endif
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p style="color:#fff">Don't have an account ? <a
                                href="{{ route('register') }}"
                                class="fw-medium text-primary2"> Signup now </a>
                        </p>
                        <p style="color:#fff">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Copyright. CargoMax Services Limited
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection