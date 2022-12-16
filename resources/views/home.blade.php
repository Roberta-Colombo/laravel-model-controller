@extends('layouts.app')

@section('title')
<h1>Our Movies:</h1>
@endsection


@section('paragraph')
<div class="container">
    <div class="row">
         @forelse ($movies as $movie)
        <div class="card col-6">
            <div class="card-img-top">
                <img src="{{ $movie->image }}" alt="Locandina {{ $movie->title }}">
            </div>
            <div class="card-text">
                {{ $movie->title }}
                <div>Data di uscita: {{ $movie->date }}</div>
                <div>Voto: {{ $movie->vote }}</div>
            </div>
        </div>
        @empty
            <div>Nessun film trovato</div>
        @endforelse
    </div>
</div>   
@endsection    



