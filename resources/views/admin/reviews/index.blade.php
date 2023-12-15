@extends('layouts.app')

@section('content')
    @foreach ($reviews as $review)
        <div class="review-box {{ $review->vote >= 3? 'border-green' : 'border-red'}}">
            <p>Recensione di: {{ $review->sender}}</p>
            <p>{{ $review->content}}</p>
            <p>Votazione: {{ $review->vote}}</p>
            <span>{{ $review->created_at}}</span>
        </div>
    @endforeach
@endsection

<style>
    div.review-box{
        padding: 1rem;
        margin: 1rem 0.5rem;
    }

    div.review-box>span{
        text-align: right;
        display: block;
    }

    .border-green{
        border: 1px solid green;
    }

    .border-red{
        border: 1px solid red;
    }
    
</style>

