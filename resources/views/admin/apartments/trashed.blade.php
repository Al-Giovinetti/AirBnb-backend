@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(count($apartmentList)>0)
            <table class="table table-striped ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nome struttura</th>
                        <th scope="col">Regione</th>
                        <th scope="col">Città</th>
                        <th scope="col">Indirizzo</th>
                        <th scope="col" >Operazioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apartmentList as $key => $apartment)
                    <tr class="text-center">
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $apartment->name}}</td>
                        <td>{{ $apartment->region}}</td>
                        <td>{{ $apartment->city}}</td>
                        <td>{{ $apartment->address}}</td>
                        <td>
                            <a href="{{route('admin.apartments.restored',$apartment->id)}}" class="btn btn-success">Rendi disponibile</a>
                            <form action="{{route('admin.apartments.forceDelete',$apartment->id)}}"  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Cancella Definitivamente">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2>Non hai strutture disattivate</h2>
            @endif


        </div>
    </div>
@endsection