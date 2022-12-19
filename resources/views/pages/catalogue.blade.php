@extends('layouts.app')

@section('maintitle', 'Movies catalogue')

@section('title')
<h2 class="catalogue-title">Il nostro catalogo:</h2>
<p class="home-title-description"><em>clicca sul titolo del film per maggiori dettagli</em></p>
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
                {{-- Cliccando sul titolo si viene indirizzati a una nuova pagina contenente i dettagli di quel film --}}
                <div class="movie-title"><a href="{{route('singlemovie', ['id'=> $movie->id])}}">{{ $movie->title }}</a></div>
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