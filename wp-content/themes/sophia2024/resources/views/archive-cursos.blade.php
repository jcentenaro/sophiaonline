@extends('layouts.app')

@section('content')

<h1 class="section-title section-title--cursos">Cursos</h1>
<div class="section-intro cursos">
  <div class="container">
      <p class="section-intro__text"><strong>En este espacio te proponemos actividades para transitar los diversos y profundos caminos de la espiritualidad humana.</strong> Cursos, talleres y seminarios a cargo de personas que abrazan la sabiduría como sustancia esencial de la vida y la comparten con quienes se aventuran a recorrer los insondables caminos del ser en busca de nuevos sentidos. La invitación es a vivenciar, individual y colectivamente, la fascinante aventura del conocimiento. Escribinos a <a href="mailto:cursosytalleres@fundacionalumbrar.org" target="_blank">cursosytalleres@fundacionalumbrar.org</a></p>
  </div>
</div>

<section class="notas">
  <div class="container">
    @include('partials.masonry.list')
  </div>
</section>

@endsection

@section('sidebar')

@endsection
