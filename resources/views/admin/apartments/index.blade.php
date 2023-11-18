@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row mx-2 justify-content-md-start">
        @foreach($apartments as $apartment)
        <div class="card col-md-4 mb-3 me-md-3 pt-2" >
            <img src="{{ $apartment->image}}" class="card-img-top" alt="{{ $apartment->name }} image">
            <div class="card-body ">
                <h5 class="card-title">{{ $apartment->name }}</h5>
                <h5 class="card-title">Indirizzo</h5>
                <p class="card-text">{{ $apartment->region }} - {{ $apartment->city }} - {{ $apartment->address }}</p>
                <h5 class="card-title">Posti letto</h5>
                <p class="card-text">{{ $apartment->beds }} </p>
                <a href="{{ route('admin.apartments.show', $apartment->id)}}" class="btn btn-primary">Apri</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <a href="{{ route('admin.apartments.create')}}" class="btn btn-primary mb-2 col-7 mx-auto">Aggiungi struttura</a>
        <a href="{{ route('admin.apartments.trashed')}}" class="btn btn-primary mb-2 col-7 mx-auto">Strutture disabilitate</a>
    </div>
</div>

@endsection
