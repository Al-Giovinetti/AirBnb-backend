@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row col-11 col-md-12 mx-auto justify-content-md-start">
        @foreach($apartments as $apartment)
        <div class="card col-md-4 mb-3 me-md-3">
            <img src="{{ $apartment['image']}}" class="card-img-top" alt="{{ $apartment['name'] }} image">
            <div class="card-body ">
                <h5 class="card-title">{{ $apartment['name'] }}</h5>
                <h5 class="card-title">Indirizzo</h5>
                <p class="card-text">{{ $apartment['region'] }} - {{ $apartment['city'] }} - {{ $apartment['address'] }}</p>
                <h5 class="card-title">Posti letto</h5>
                <p class="card-text">{{ $apartment['beds'] }} </p>
                <button type="button" class="btn btn-primary">Vedi</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
