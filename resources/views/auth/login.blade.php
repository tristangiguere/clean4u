@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center col-xl">
    <div class=" d-flex justify-content-center align-items-center col-xl">
            <div class="row">
                <div class="col-xl d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-header">{{ __('Connexion') }}</div>

                            <div class="card-body">
                             <form method="POST" action="{{ route('login') }}">
                              @csrf
                                 <h5 class="fw-normal mb-3 pb-3 fw-bold text-center" style="letter-spacing: 1px;">Connexion</h5>
                             <div class="form-outline mb-4">
                            <label for="email" class="form-label">{{ __('Email') }}</label>

                            <div class="form-outline mb-4">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            @if (Route::has('password.request'))
                                <div class="col-md-8">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            </div>
                                  </form>
                                 </div>
                              </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
</div>
@endsection
