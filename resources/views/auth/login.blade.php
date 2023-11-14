@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-top-2 border-bottom-2 border-0">
            
            <div class="card-body d-flex flex-column align-items-center">
                <form method="POST" action="{{ route('login') }}" style="width: 400px">
                    <img src="{{ asset('assets/img/Usuarui.png') }}" alt="Descripción de la imagen" class="img-fluid mx-auto d-block" width="150px">
                    @csrf

                    <div class="form-group row w-100 mx-auto" style="max-width: 400px;">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row w-100 mx-auto" style="max-width: 600px;">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0 justify-content-end ">
                        <div class="col-md-6 gotham">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-end" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class=" form-group row w-100 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block rounded-pill">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
