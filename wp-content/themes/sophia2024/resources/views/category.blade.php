@extends('layouts.app')

@section('content')

  @include('partials.page-header')
  <section class="notas">
    <div class="container">
      @include('partials.masonry.list')
    </div>
  </section>

@endsection

@section('sidebar')

@endsection
