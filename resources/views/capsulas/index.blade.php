@extends('layouts.base')

@section('content')
<div class="container">
    <h3 class="text-secondary ">CAPSULAS</h3>
</div>
<div class="container mt-4">

    <div class="row">

        @forelse ( $capsulas as $capsula)
        <div class="col-lg-3 col-md-6 mb-4 cardEffect">
            <div class="card align-items-center border-0" style="width: 100%;">
                <p id="{{ $capsula->id }}" hidden>{{ $capsula->id }}</p>
                <img src="{{ $capsula->urlImagen }}" class="Imagen de video" alt="" width="200px" height="200px">
                <div class="d-flex flex-column align-items-start ">
                    <p class="limitedText text-secondary fs-6 mb-0"> {{ $capsula->titulo }}</p>
                    <p class="text-secondary fs-xxsm pt-0 mt-0">Octubre, 19 de 2023</p>
                </div>
            </div>
        </div>
            
        @empty
            <h4>NINGUN FOLLETO POR MOSTRAR</h4>
        @endforelse


    </div>
</div>
@endsection