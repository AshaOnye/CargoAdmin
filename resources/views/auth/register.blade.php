@extends('layouts.auth')

@section('title', 'Register')

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
                                    <h5 class="text-primary1">Sign Up Here!</h5>
                                    <p>Get your free CargoMax account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/delivery3.png" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="">
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
                            <form class="needs-validation" novalidate
                                action="{{ route('auth.signup') }}"
                                method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="username"
                                        class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}"
                                        required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="useremail"
                                        class="form-label">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}"
                                        required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword"
                                        class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password" required
                                        autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword"
                                        class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirmation"
                                        type="password" class="form-control"
                                        name="password_confirmation" required
                                        autocomplete="new-password">

                                    <!-- @error('password')
                                            <span class="invalid-feedback"
                                                role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror      -->

                                    @if($errors->has("password"))
                                    <span
                                        class="text-danger">{{$errors->first('password')}}</span>
                                    @endif
                                </div>

                                <div class="mt-4 d-grid">
                                    <button
                                        class="btn btn-primary waves-effect waves-light"
                                        type="submit">{{ __('Register') }}</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to
                                        our <a href="#"
                                            class="text-primary">Terms of
                                            Use</a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p style="color:#fff">Already have an account ? <a
                                href="{{route('login')}}"
                                class="fw-medium text-primary"> Login</a> </p>
                        <p class="mb-0" style="color:#fff">
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