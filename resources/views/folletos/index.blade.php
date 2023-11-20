@extends('layouts.base')

@section('content')
<div class="container">
    <h3 class="text-secondary ">MANUALES</h3>
</div>
<div class="container mt-4">

    <div class="row">

        @forelse ( $folletos as $folleto)
        <div class="col-lg-3 col-md-6 mb-4 cardEffect">
            <div class="card align-items-center border-0" style="width: 100%;">
                <img src="{{ $folleto->url }}" class="" alt="Manual img" width="100px" height="150px">
                <h6 class="limitedText text-secondary"> {{ $folleto->titulo }}</h6>
            </div>
        </div>
            
        @empty
            <h4>NINGUN FOLLETO POR MOSTRAR</h4>
        @endforelse


    </div>
</div>
@endsection
