@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container container-md-fluid">
    <div class="row d-md-flex justify-content-md-evenly">
        <div class="col-sm-12 col-md-5 profile-box dashboad-box mb-sm-3 mb-md-4 ">
            <div class="content">
                <h2>Il tuo profilo</h2>
                <p>Visiona il tuo profilo, aggiungi o modifica le tue info.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-5 houses-box dashboad-box mb-sm-3 mb-md-4">
            <div class="content">
                <h2>Le tue abitazioni</h2>
                <p>Vedi le abitazioni da te registrate, aggiungi e modifica dettagli.</p>
            </div> 
        </div>
        <div class="col-sm-12 col-md-5 statistics-box dashboad-box mb-sm-3 mb-md-4">
            <div class="content">
                <h2>Statistiche</h2>
                <p>Analizza tramite grafici il tuo andamento sulla piattaforma.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-5 mexs-box dashboad-box mb-sm-3 mb-md-4">
            <div class="content">
                <h2>Messaggi</h2>
                <p>Visualizza tutti i messaggi in arrivo sulla mail da te inserita.</p>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .dashboad-box{
        height: 50vh;
        border-radius: 15px;
        position: relative;
    }

    div.content{
        position:absolute;
        left: 50%; top:50%;
        transform: translate(-50%,-50%);
    }
    .profile-box{
        border: 1px solid black;
    }
    .houses-box{
        border: 1px solid red;
    }

    .statistics-box{
        border: 1px solid yellow;
    }

    .mexs-box{
        border: 1px solid pink;
    }
</style>