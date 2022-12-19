@extends('layouts.app')


@section('paragraph')
<div class="container single-movie">
    <h3>{{ $movie->title }}</h3>
    <p>
        Titolo originale: {{ $movie->original_title }}<br>
        Nazionalit&agrave;: {{ $movie->nationality }}<br>
        Data di uscita: {{ $movie->date }}<br>
    </p>
</div>
@endsection