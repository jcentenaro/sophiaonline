@extends('layouts.app')

@section('content')


<h1 class="section-title section-title--multimedia">
  Podcasts<img src="@asset('images/icons/icono-podcasts.svg')" width="40" height="40" alt="Podcasts"/><a href="https://open.spotify.com/show/7zHcSaR6wS8JJG5kFCgq0e?si=ewIQuNC2RXu4sndWhjdUlA&nd=1">Sophia en Spotify</a>
</h1>

<section class="notas">
  <div class="container">
    @include('partials.masonry.list')
  </div>
</section>

@endsection

@section('sidebar')

@endsection
