@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Inserisci i tuoi dati e crea un profilo sulla piattaforma</h2>
    <form action="{{ route('admin.owners.store')}}" class="row" method="POST">
        @csrf
        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="name" class="form-label">Nome *</label>
            <input type="text"  class="form-control" name="name">
            @error('name')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="surname" class="form-label">Cognome *</label>
            <input type="text"  class="form-control" name="surname">
            @error('surname')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="age" class="form-label">Età</label>
            <input type="number"  class="form-control" name="age" >
            @error('age')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="image" class="form-label">Immagine del profilo</label>
            <input type="text"  class="form-control" name="image" >
            @error('image')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-8 mx-auto col-md-8">
            <label for="bio" class="form-label">La tua descrizione</label>
            <textarea name="bio" class="col-12 form-control" rows="10">

            </textarea>
            @error('bio')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Crea</button>
        </div>
    </form>
</div>
@endsection