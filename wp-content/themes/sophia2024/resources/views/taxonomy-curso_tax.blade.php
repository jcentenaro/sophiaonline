@extends('layouts.app')

@section('content')
<h1 class="section-title section-title--cursos">
  Cursos: {{ $tax_nombre }}
</h1>
<section class="notas">
  <div class="container">
    @include('partials.masonry.list')
  </div>
</section>
@endsection

@section('sidebar')
@endsection
