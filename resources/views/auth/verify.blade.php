@extends('layouts.app')

@section('content')
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <!-- Pesan Error untuk Email -->
                        @error('email')
                            <div class="card text-white bg-danger animate__animated animate__fadeIn mb-3"
                                style="max-width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Error</h5>
                                    <p class="card-text">{{ __('Maaf, email yang Anda masukkan salah.') }}</p>
                                </div>
                            </div>
                        @enderror

                        <!-- Pesan Error untuk Password -->
                        @error('password')
                            <div class="card text-white bg-danger animate__animated animate__fadeIn mb-3"
                                style="max-width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">Error</h5>
                                    <p class="card-text">{{ __('Maaf, password yang Anda masukkan salah.') }}</p>
                                </div>
                            </div>
                        @enderror

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan animasi dari Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
