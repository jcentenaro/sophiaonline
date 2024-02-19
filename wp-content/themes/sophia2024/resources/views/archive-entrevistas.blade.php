@extends('layouts.app')

@section('content')
  <h1 class="section-title section-title--multimedia">
    <img src="@asset('images/icons/icono-entrevistas.svg')" width="40" height="40" alt="Entrevistas"/>
    Entrevistas
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
