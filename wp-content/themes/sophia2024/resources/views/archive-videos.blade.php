@extends('layouts.app')

@section('content')
  <h1 class="section-title section-title--multimedia">
    Videos<img src="@asset('images/icons/icono-videos.svg')" width="40" height="40" alt="Videos"/><a href="https://www.youtube.com/user/RevistaSophiaOnline" target="_blank">Sophia en Youtube</a>
  </h1>

  <section class="notas">
    <div class="container">
      @include('partials.masonry.list')
    </div>
  </section>
@endsection

@section('sidebar')
  {{-- @include('sections.sidebar') --}}
@endsection
