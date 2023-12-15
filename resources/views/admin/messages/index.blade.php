@extends('layouts.app')

@section('content')

@foreach ($userMessages as $message)
    <div class="message">
        <p>Messaggio inviato da: {{ $message->sender_email}}</p>
        <p>{{ $message->content}}</p>
        <span>{{ $message->updated_at}}</span>
    </div>
@endforeach
@endsection

<style>
    div.message{
        padding: 1rem 0.5rem;
        border: 1px solid black;
        margin: 0.5rem 1rem;
    }

    span{
        display: block;
        text-align: right;
    }
</style>