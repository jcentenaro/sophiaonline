@extends('layouts.app')

@section('content')
<h1 class="section-title">
  Carta de la semana
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
