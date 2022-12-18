@extends('layouts.app')

@section('maintitle', 'Movies catalogue')

@section('title')
<h2 class="catalogue-title">Il nostro catalogo:</h2>
@endsection

@section('paragraph')
<div class="container">
    <div class="row">
         @forelse ($movies as $movie)
        <div class="card col-6 mb-5">
            <div class="card-img-top">
                <img src="{{ $movie->image }}" alt="Locandina {{ $movie->title }}">
            </div>
            <div class="card-text">
                <div class="movie-title">{{ $movie->title }}</div>
                <div><em>Data di uscita: {{ $movie->date }}</em></div>
                <div><em>Voto: {{ $movie->vote }}</em></div>
            </div>
        </div>
        @empty
            <div>Nessun film trovato</div>
        @endforelse
    </div>
</div>   
@endsection    