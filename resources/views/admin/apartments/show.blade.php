@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row mx-2">
            <div class="card px-0 mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3> {{ $apartment->name }} </h3>
                    <div class="sponsors">
                        @foreach($apartment->sponsors as $sponsor)
                            <span style="background-color: {{$sponsor->color}}" class="p-1">{{ $sponsor->name }}</span>
                        @endforeach
                    </div>   
                </div>
                <div class="image-box mb-2 mx-auto">
                    <img src="{{ $apartment->image }}" alt="{{ $apartment->name }} image">
                </div>
                <div class="card-body d-md-flex">
                    <div class="col-12 col-md-9">
                        <h6 class="mb-2 fw-semibold">Descrizione</h6>
                        <p>{{ $apartment->description }}</p>
                        <h6 class="mb-2 fw-semibold"> Locazione</h6>
                        <p>{{ $apartment->region}} - {{ $apartment->city}} - {{ $apartment->address}}</p>
                        <h6 class="mb-2 fw-semibold">Posti letto</h6>
                        <p>{{ $apartment->beds }}</p>
                        <h6 class="mb-2 fw-semibold">Pezzo a notte p/p</h6>
                        <p> {{ round($apartment->nightly_rate) }} </p>
                    </div>
                    <div class="services col-12 col-md-3 d-md-flex flex-md-column">
                    <h6 class="mb-2 fw-semibold">Servizi struttura</h6>
                        @foreach($apartment->services as $service)
                            <span> -{{ $service->name }} </span>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="" class="btn btn-primary">Modifica Dati</a>
                    <form action="">
                        <button type="submit" class="btn btn-primary">Disabilita struttura</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .image-box{
            border:1px solid  black;
            border-radius: 10px;
            padding: 0.5rem;
            margin: 10px;
            width: 85%;
            height: 300px;
        }
    </style>
@endsection