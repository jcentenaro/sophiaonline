{{--
  Template Name: Suscribir al Newsletter.
--}}

@extends('layouts.suscripcion')

@section('content')
@php(the_content())
<div class="newsbox__share">
  <h6 class="newsbox__label">COMPARTÍ</h6>
  <div class="newsbox__social">
      <x-shared></x-shared>
  </div>
</div>
@endsection
