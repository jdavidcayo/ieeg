@extends('layouts.baseLogin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-top-2 border-bottom-2 border-0 bg-transparent ">

                <div class="card-body d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/img/Usuarui.png') }}" alt="Descripción de la imagen"
                        class="img-fluid mx-auto d-block " width="100px">
                    <form method="POST" action="{{ route('login') }}" style="width: 400px">
                        <hr class="border-4 border-white mt-4 mb-4">
                        @csrf

                        <div class="form-group row w-100 mx-auto mb-2 " style="max-width: 400px;">
                            <div class="col-md-12">

                                <div class="input-group mb-2 rounded-pill overflow-hidden">
                                    <span class="input-group-text bg-primary border-0" id="basic-addon1"><img src="{{ asset('assets/img/Usuarui.png') }}" alt="Usuario logo" width="25px"></span>
                                    <input type="email" id="email" class="form-control form-control-lg bg-warning-transparent border-0 text-crema @error('email') is-invalid @enderror" name="email" autocomplete="off" value="{{ old('email') }}" placeholder="Email" required autofocus aria-label="Username" aria-describedby="basic-addon1">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    
                            </div>
                        </div>

                        <div class="form-group row w-100 mx-auto" style="max-width: 600px;">
                            <div class="col-md-12">

                                <div class="input-group rounded-pill overflow-hidden border-cream">
                                    <span class="input-group-text bg-primary border-0" id="basic-addon1"><img src="{{ asset('assets/img/Candado.png') }}" alt="Candado logo" width="25px"></span>
                                    <input id="password" type="password"
                                    class="form-control form-control-lg  bg-warning-transparent border-0 text-crema @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Password">                             
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-end ">
                            <div class="col-md-8 gotham text-end ">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-end text-crema fs-6 pt-1 mb-2 forgotText text-decoration-none"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class=" form-group row w-100 mx-auto">
                            <button type="submit" class="btn btn-warning  btn-block rounded-pill text-crema gothamB">
                                INICIAR SESIÓN
                            </button>
                        </div>
                        <hr class="border-4 border-white mt-4 ">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
