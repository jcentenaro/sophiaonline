{{--
  Template Name: Columnistas
--}}

@extends('layouts.app')

@section('content')

<h1 class="section-title section-title--columnistas">Columnistas</h1>
<h2 class="section-title--intro">Son las voces destacadas de nuestra redacción.<br>  No te pierdas sus profundas reflexiones sobre los temas más significativos del mundo y de la vida.</h2>
<div class="columnistas__index">
    <div class="container">
        <div class="columnistas__grid">
            @foreach ($columnistas as $columnista)
              <div class="columnistas__item">
                <figure class="columnistas__image"><a href="{!! $columnista['link'] !!}"><img src="{!! $columnista['imagen'] !!}" width="120" height="120" alt=""></a></figure>
                <h2 class="columnistas__name"><a href="{!! $columnista['link'] !!}">{!! $columnista['name'] !!}</a></h2>
                <h3 class="columnistas__title"><a href="{!! $columnista['link'] !!}">{!! $columnista['desc_corta'] !!}</a></h3>
                <p class="columnistas__text">{!! $columnista['desc'] !!}</p>
                <a href="{!! $columnista['link'] !!}" class="btn">LEER COLUMNAS</a>
              </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
