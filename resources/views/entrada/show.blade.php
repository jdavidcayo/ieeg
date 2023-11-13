@extends('layouts.app')

@section('template_title')
    {{ $entrada->name ?? "{{ __('Show') Entrada" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('entrada.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $entrada->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $entrada->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $entrada->asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $entrada->idCategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $entrada->url }}
                        </div>
                        <div class="form-group">
                            <strong>Urlthumb:</strong>
                            {{ $entrada->urlThumb }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $entrada->autor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
