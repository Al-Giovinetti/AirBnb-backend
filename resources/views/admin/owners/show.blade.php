@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3 mt-3 px-0">
        <div class="card-header">
            <h1>Il tuo profilo</h1>
        </div>
        <div class="card-body row align-items-center">
            <div class="col-12 col-md-4 mb-2 mb-md-0">
                <img src="{{ $owner->image }}" class="img-fluid" alt=" 'Owner image profile's' ">
            </div>
            <div class="col-12 col-md-8">
                <h3>{{ $owner->name . " " . $owner->surname}}</h3>
                <p>{{ $owner->age}} anni</p>
                <h5>La tua presentazione</h5>
                <p>{{ $owner->bio}}</p>
            </div>
        </div>
        <div class="card-footer d-flex flex-column align-items-center flex-md-row justify-content-md-around">
            <button type="button" class=" btn btn-primary mb-2 mb-md-0">
                <a href="{{ route('admin.dashboard') }}">Torna Indietro</a>
            </button>
            <button type="button" class=" btn btn-primary mb-2 mb-md-0">
                <a href="{{ route('admin.owners.edit', $owner) }}">Modifica Info</a>
            </button>
            <form action="">
                <button type="button" class=" btn btn-primary mb-2 mb-md-0">Cancella profilo</button>
            </form>

        </div>
    </div>  
</div>

<style>
    a{
        color: white;
        text-decoration: none;
    }
</style>
@endsection