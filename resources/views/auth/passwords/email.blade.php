@extends('layouts.baseLogin')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-lg-5 ">
        <div class="col-md-8 mt-md-5 ">
            <div class="card d-flex justify-content-center bg-transparent border-0">
                <div class="card-header text-center gothamB text-white fs-4 border-0 ">RESTABLECER CONTRASEÑA</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center ">
                            <label for="email" hidden class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                            
                                <div class="input-group mt-2 rounded-pill overflow-hidden w-100 ">
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

                        <div class="row mt-5 d-flex flex-column justify-content-center align-content-center ">
                            <div class="col-md-6 d-flex justify-content-center align-content-center ">
                                <button type="submit" class="btn btn-danger rounded-pill border-2 text-white gothamB">
                                    RESTABLECER
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr class="border-2 border-light pt-5 mt-5">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
