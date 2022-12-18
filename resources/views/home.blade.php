@extends('layouts.app')


@section('title')
<h2 class="home-title">I pi&ugrave; votati: **</h2>
<p class="home-title-description"><em>** selezione di film che hanno ottenuto un punteggio minimo di 8.5/10</em></p>
@endsection

{{-- Slider con 5 dei film più votati (voto minimo 8.5) --}}

@section('paragraph')
<div class="slider-layout">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @forelse ($bestRated as $item)
          <div class="carousel-item active">
            <img src="{{ $item->image }}" class="d-block w-100" alt="Locandina {{ $item->title }}">
            <div class="carousel-caption d-none d-md-block my-caption">
                <div class="title">{{ $item->title }}</div>
            </div>
          </div>
          @empty
          <div>Nessun film trovato</div>
          @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
@endsection    





