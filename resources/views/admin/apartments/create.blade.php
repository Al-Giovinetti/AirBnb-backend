@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row mx-2">
        <form action="{{ route('admin.apartments.store')}}" method="POST">
            @csrf
            <div class="card p-0 mb-3">
                <div class="card-header">
                    <h3>Inserisci i dati e aggiungi una nuova struttura</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome struttura</label>
                        <input type="text" name="name" value="{{ old('name','')}}" class="form-control">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control">
                            {{ old('description','')}}
                        </textarea>
                            
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="text" name="image" value="{{ old('image','')}}" class="form-control">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo</label>

                        <input type="text" name="region" placeholder="Inserisci regione" value="{{ old('region','')}}" class="form-control mb-2">
                        @error('region')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="city" placeholder="Inserisci città" value="{{ old('city','')}}" class="form-control mb-2">
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="address" placeholder="Inserisci via e numero" value="{{ old('address','')}}" class="form-control">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="beds" class="form-label">Numero di posti letto</label>
                        <input type="number" name="beds" value="{{ old('beds','')}}" class="form-control">
                        @error('beds')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="nightly_rate" class="form-label">Prezzo a notte per persona</label>
                        <input type="text" name="nightly_rate" value="{{ old('nightly_rate','')}}" class="form-control">
                        @error('nightly_rate')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Servizi struttura</label>
                        @foreach($services as $service)
                            <input type="checkbox" name="services[]"  id="services" value="{{ $service->id }}">
                            <label for="services"> {{ $service->name}} </label>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" value="Crea" class="btn btn-primary">
                    <button type="reset" class="btn btn-warning">Resetta form</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection