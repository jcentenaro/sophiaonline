@extends('layouts.app')

@section('content')


  <div class="alianzas--intro">
    <div class="container">
        <div class="alianzas-intro-grid">
            @if($alianza_has_imagen)
              <figure class="alianzas--intro-image">
                <x-imagen url="$alianza_imagen"></x-imagen>
              </figure>
            @endif
            <div class="alianzas--intro-data">
                <div class="alianzas--intro-head">
                    <h2 class="alianzas--intro-name">Alianza</h2>
                    <h3 class="alianzas--intro-title">{!! $alianza_nombre !!}</h3>
                </div>
                <p class="alianzas--intro-text">{!! $alianza_descripcion !!}</p>
                <div class="alianzas--intro-cta">
                    @foreach ($alianza_links as $links)
                      {!! $links !!}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>

  <h2 class="section-subtitle">Últimas notas</h2>

  <section class="notas">
    <div class="container">
      @include('partials.masonry.list')
    </div>
  </section>

@endsection

@section('sidebar')
@endsection
