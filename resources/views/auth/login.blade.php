@extends('layouts.app')

@section('content')
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center"
        style="background-image: url('/path/to/your/background-image.jpg'); background-size: cover; background-position: center;">
        <div class="row justify-content-center w-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h3 class="mb-0">{{ __('Login') }}</h3>
                    </div>

                    <div class="card-body p-4">
                        <!-- Pesan Error untuk Email -->
                        @error('email')
                            <div class="card text-white bg-danger mb-3 animate__animated animate__fadeIn">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-exclamation-circle"></i> Error</h5>
                                    <p class="card-text">{{ __('Maaf, Email Yang Anda Masukkan Salah') }}</p>
                                </div>
                            </div>
                        @enderror

                        <!-- Pesan Error untuk Password -->
                        @error('password')
                            <div class="card text-white bg-danger mb-3 animate__animated animate__fadeIn">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-exclamation-circle"></i> Error</h5>
                                    <p class="card-text">{{ __('Maaf, Password Yang Anda Masukkan Salah') }}</p>
                                </div>
                            </div>
                        @enderror

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block btn-lg mb-2 fire-button"
                                    style="transition: 0.3s;">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>

                    <div class="card-footer text-center">
                        <small class="text-muted">Don't have an account? <a href="{{ route('register') }}">Sign
                                Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan font awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Tambahkan animasi dari Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Tambahkan animasi api di CSS -->
    <style>
        .fire-button {
            position: relative;
            overflow: hidden;
        }

        .fire-button:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: rgba(255, 165, 0, 0.7);
            /* Warna oranye api */
            transition: all 0.4s ease-in-out;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
        }

        .fire-button:hover:before {
            transform: translate(-50%, -50%) scale(1);
        }

        .fire-button:active:before {
            background-color: rgba(255, 69, 0, 0.7);
            /* Warna merah api */
            transform: translate(-50%, -50%) scale(0);
            transition: none;
        }
    </style>
@endsection
