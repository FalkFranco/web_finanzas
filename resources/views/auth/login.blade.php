@extends('layouts.app')

@section('content_landing')
    {{-- <section class="vh-100">
        <div class="row h-100">
            <div class="col-lg-6 col-12 bg-black d-flex flex-column align-items-center justify-content-center">
                <div class="container-md">
                    <h1 class="fw-bold text-white pb-3">Iniciar Sesión</h1>
                    <p class="pb-3 mb-3 mb-lg-4 text-white">
                        ¿No posees cuenta?
                        <a href="#" class="ms-2 text-primary">
                            ¡Regístrate aquí!
                        </a>
                    </p>
                    <form action="">
                        <div class="pb-3 mb-3">
                            <div class="position-relative">
                                <i
                                    class="ri-mail-line fs-lg position-absolute top-50 start-0 translate-middle-y ms-3 text-grey"></i>
                                <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address"
                                    required />
                            </div>
                        </div>
                        <div class="pb-3 mb-3">
                            <div class="position-relative">
                                <i
                                    class="ri-lock-line fs-lg position-absolute top-50 start-0 translate-middle-y ms-3 text-grey"></i>
                                <input class="form-control form-control-lg ps-5" type="password" placeholder="Password"
                                    required />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-4">
                            Iniciar Sesión
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block bg-secondary d-flex align-items-center justify-content-center p-0">
                <img src="{{ asset('img/finanza_bg.jpg') }}" alt="Login" class="img-fluid w-100 h-100" />
            </div>
        </div>
    </section> --}}
    <section class="login">
        <div class="vh-100">
            <div class="row h-100">
                <div class="col-lg-6 col-12 bg-black d-flex flex-column align-items-center justify-content-center">
                    <div class="container-md container">
                        <h1 class="fw-bold text-white pb-3">Iniciar Sesión</h1>
                        <p class="pb-3 mb-3 mb-lg-4 text-white">
                            No posees cuenta?
                            <a href="{{ route('register') }}" class="ms-2 text-primary">
                                Registrate aquí!
                            </a>
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="pb-3 mb-3">
                                <div class="position-relative">
                                    <i
                                        class="ri-mail-line fs-lg position-absolute top-50 start-0 translate-middle-y ms-3 text-grey"></i>
                                    {{-- <input class="form-control form-control-lg ps-5" type="email"
                                        placeholder="Email address" required /> --}}
                                    <input id="email" type="email"
                                        class="form-control form-control-lg ps-5 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email address" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ 'Estas credenciales no coinciden con nuestros registros.' }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="pb-3 mb-3">
                                <div class="position-relative">
                                    <i
                                        class="ri-lock-line fs-lg position-absolute top-50 start-0 translate-middle-y ms-3 text-grey"></i>
                                    {{-- <input class="form-control form-control-lg ps-5" type="password" placeholder="Password"
                                        required /> --}}
                                    <input id="password" type="password"
                                        class="form-control form-control-lg ps-5 @error('password') is-invalid @enderror"
                                        name="password" required placeholder="Password" autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ 'Estas credenciales no coinciden con nuestros registros.' }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <button type="submit" class="btn btn-lg btn-primary w-100 mb-4">
                                Iniciar Sesión
                            </button> --}}
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-4">
                                {{ __(' Iniciar Sesión') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn text-white" href="{{ route('password.request') }}">
                                    {{ __('Olvido su contraseña?') }}
                                </a>
                            @endif
                        </form>
                    </div>

                </div>
                <div
                    class="col-lg-6 d-none d-lg-block bg-secondary d-flex align-items-center justify-content-center p-0 imageContainer">
                    <img src="{{ URL::asset('build/img/finanza_bg.jpg') }}" alt="Login" width="1920" height="1080"
                        class="img-fluid fullWidthHeight" />
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('script')
    {{-- <script src="{{ URL::asset('build/libs/particles.js/particles.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('build/js/pages/particles.app.js') }}"></script> --}}
    <script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
