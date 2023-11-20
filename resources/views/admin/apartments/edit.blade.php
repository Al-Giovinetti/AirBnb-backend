@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row mx-2">
        <form action="{{ route('admin.apartments.update', $apartment)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card p-0 mb-3">
                <div class="card-header">
                    <h3>Modifica i dati che preferisci</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome struttura</label>
                        <input type="text" name="name" value="{{ old('name',$apartment->name)}}" class="form-control">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control">
                            {{ old('description',$apartment->description)}}
                        </textarea>
                            
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="text" name="image" value="{{ old('image',$apartment->image)}}" class="form-control">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo</label>

                        <input type="text" name="region" placeholder="Inserisci regione" value="{{ old('region',$apartment->region)}}" class="form-control mb-2">
                        @error('region')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="city" placeholder="Inserisci città" value="{{ old('city',$apartment->city)}}" class="form-control mb-2">
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="address" placeholder="Inserisci via e numero" value="{{ old('address',$apartment->address)}}" class="form-control">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="beds" class="form-label">Numero di posti letto</label>
                        <input type="number" name="beds" value="{{ old('beds',$apartment->beds)}}" class="form-control">
                        @error('beds')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="nightly_rate" class="form-label">Prezzo a notte per persona</label>
                        <input type="text" name="nightly_rate" value="{{ old('nightly_rate',$apartment->nightly_rate)}}" class="form-control">
                        @error('nightly_rate')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Servizi struttura</label>
                        @foreach($services as $service)
                            @if(in_array($service->id, $apartmentServicesId) )
                                
                                <input type="checkbox" name="services[]"  id="services" value="{{ $service->id }}" checked>
                            @else
                                <input type="checkbox" name="services[]"  id="services" value="{{ $service->id }}">
                            @endif
                            <label for="services"> {{ $service->name}} </label>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" value="Modifica" class="btn btn-primary">
                    <a href="{{ route('admin.apartments.show',$apartment)}}" class="btn btn-secondary">Torna indietro</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection