@extends('layouts.app')
@section('content')
    <div class="row col-lg-12 justify-content-center align-content-center ">

        <div class="card text-bg-dark col-lg-4 border-0 rounded-0 p-0 " style="max-height: 300px; max-width: 350px">
            <a href="{{ route('manuales.index') }}">
                <img src="{{ asset('assets/img/Mosaico-Manuales.png') }}" class="card-img img-fluid rounded-0 " alt="Manuales"
                    style="max-width: 350px">
                <div class="card-img-overlay d-flex flex-column justify-content-end ">
                    <div class="d-flex align-items-end ">
                        <img class="" src="{{ asset('assets/img/ICONO-Manuales.png') }}" alt="icono manuales"
                            width="50px">
                        <h5 class="card-title gothamR text-primary">MANUALES</h5>
                    </div>
                    <p class="card-text text-primary">Manuales de operación de apoyo para la integración de un procedimiento
                        especial sancionador y las notificaciones en el instituto.</p>
                </div>
            </a>
        </div>


        <div class="card text-bg-dark col-lg-4 border-0 rounded-0 p-0 " style="max-height: 300px; max-width: 350px">
            <a href="{{ route('folleto.index') }}">
                <img src="{{ asset('assets/img/Mosaico-Folletos.png') }}" class="card-img img-fluid rounded-0 "
                    alt="Manuales" style="max-width: 350px">
                <div class="card-img-overlay d-flex flex-column justify-content-end ">
                    <div class="d-flex align-items-end ">
                        <img class="" src="{{ asset('assets/img/ICONO-Folletos.png') }}" alt="icono manuales"
                            width="50px">
                        <h5 class="card-title gothamR text-cream ">FOLLETOS</h5>
                    </div>

                </div>
            </a>
        </div>



        <div class="card text-bg-dark col-lg-4 border-0 rounded-0 p-0 " style="max-height: 300px; max-width: 350px">
            <a href="{{ route('formatos.index') }}">
                <img src="{{ asset('assets/img/Mosaico-Formatos.png') }}" class="card-img img-fluid rounded-0 "
                    alt="Manuales" style="max-width: 350px">
                <div class="card-img-overlay d-flex flex-column justify-content-end ">
                    <div class="d-flex align-items-end ">
                        <img class="" src="{{ asset('assets/img/ICONO-Formatos.png') }}" alt="icono manuales"
                            width="50px">
                        <h5 class="card-title gothamR text-primary">FORMATOS</h5>
                    </div>
                </div>
            </a>
        </div>



        <div class="card text-bg-dark col-lg-4 border-0 rounded-0 p-0 " style="max-height: 300px; max-width: 350px">
            <a href="{{ route('catalogos.index') }}">
                <img src="{{ asset('assets/img/Mosaico-Catalogos.png') }}" class="card-img img-fluid rounded-0 "
                    alt="Manuales" style="max-width: 350px">
                <div class="card-img-overlay d-flex flex-column justify-content-end ">
                    <div class="d-flex align-items-end ">
                        <img class="" src="{{ asset('assets/img/ICONO-Catalogo.png') }}" alt="icono manuales"
                            width="50px">
                        <h5 class="card-title gothamR text-cream">CATALOGOS</h5>
                    </div>
                </div>
            </a>
        </div>


        <div class="card text-bg-dark col-lg-4 border-0 rounded-0 p-0 " style="max-height: 300px; max-width: 350px">
            <a href="{{ route('documentos.index') }}">
                <img src="{{ asset('assets/img/Mosaico-Documentos.png') }}" class="card-img img-fluid rounded-0 "
                    alt="Manuales" style="max-width: 350px">
                <div class="card-img-overlay d-flex flex-column justify-content-end ">
                    <div class="d-flex align-items-end ">
                        <img class="" src="{{ asset('assets/img/ICONO-Documentos.png') }}" alt="icono manuales"
                            width="50px">
                        <h5 class="card-title gothamR text-primary">DOCUMENTOS</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="card text-bg-dark col-lg-4 border-0 rounded-0 p-0 " style="max-height: 300px; max-width: 350px">
            <a href="{{ route('compendios.index') }}">
                <img src="{{ asset('assets/img/Mosaico-Compendios.png') }}" class="card-img img-fluid rounded-0 "
                    alt="Manuales" style="max-width: 350px">
                <div class="card-img-overlay d-flex flex-column justify-content-end ">
                    <div class="d-flex align-items-end ">
                        <img class="" src="{{ asset('assets/img/ICONO-Compendios.png') }}" alt="icono manuales"
                            width="50px">
                        <h5 class="card-title gothamR text-cream">COMPENDIOS</h5>
                    </div>
                </div>
            </a>
        </div>

    </div>

    {{-- Carousell --}}
    <div id="carousel" class="carousel slide carousel-fade px-lg-5 my-2 d-flex align-items-center ">
        <div class="carousel-inner mx-lg-5">

            @forelse ($capsulas as $capsula)
            <div class="carousel-item @if ($loop->first) active @endif">
                <div class="card p-5 border-0">
                    <div class="row">

                        <div class="col-md-6">
                            <!-- Video -->
                            <iframe width="100%" height="315" src="{{ $capsula->url }}}"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6">
                            <!-- Contenido derecho -->
                            <div class="card-body">
                                <h5 class="card-title">{{ $capsula->titulo}}</h5>
                                <p class="card-text">{{ $capsula->descripcion }}</p>
                                <hr>
                                <p class="card-text"><small class="text-muted">Octubre 19, 2023</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <h3>NO HAY CAPSULAS POR MOSTRAR</h3>
            @endforelse

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    </div>

    <div class="container d-flex flex-column  align-items-center ">
        <a href="{{ route('capsula.index'); }}">
            <button type="button" id="irACapsulas"
                class="btn btn-outline-primary btn-block btn-sm rounded-pill px-3">
                VER MAS
            </button>
        </a>
    </div>

@endsection
