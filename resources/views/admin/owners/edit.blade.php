@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.owners.update', $owner)}}" class="row" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="name" class="form-label">Nome *</label>
            <input type="text"  class="form-control" name="name" value="{{$owner->name}}">
            @error('name')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="surname" class="form-label">Cognome *</label>
            <input type="text"  class="form-control" name="surname" value="{{$owner->surname}}">
            @error('surname')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="age" class="form-label">Età</label>
            <input type="number"  class="form-control" name="age" value="{{$owner->age}}">
            @error('age')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-8 mx-auto col-md-6">
            <label for="image" class="form-label">Immagine del profilo</label>
            <input type="text"  class="form-control" name="image" value="{{$owner->image}}">
            @error('image')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-8 mx-auto col-md-8">
            <label for="bio" class="form-label">La tua descrizione</label>
            <textarea name="bio" class="col-12 form-control" rows="10">
            {{$owner->bio}}
            </textarea>
            @error('bio')
            <div class="alert alert-danger col-12 mt-1"> {{ $message }}</div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Procedi con le modifiche</button>
        </div>
    </form>
</div>
@endsection