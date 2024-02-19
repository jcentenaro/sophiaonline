@extends('layouts.app')

@section('content')
<h1 class="section-title section-title--multimedia">
  <img src="@asset('images/icons/icono-fotogalerias.svg')" width="40" height="40" alt="Fotogalerías"/>
  Fotogalerías
</h1>

<!-- TODO DENTRO DE ESTO -->
<div class="fotogalerias">

    <!-- NOTA DESTACADA FULL WIDTH, VA POR FUERA DEL LISTADO -->
    <section class="nota-principal">
		<div class="container">

			<div class="newsbox newsbox--boxed">

				<div class="newsbox__image">
					<a href="#"><img src="@asset('images/temp/pic-home-fotogaleria-big.jpg')" width="573" height="383" alt=""/></a>
				</div>

				<div class="newsbox__group-container">
					<div class="newsbox__group">
						<div class="newsbox__content">
							<h3 class="newsbox__title"><a href="#">La sabiduría del entorno</a></h3>
							<h4 class="newsbox__autor"><a href="#">Por <strong>Alix Born</strong></a></h4>
							<p class="newsbox__text">Una fotógrafa argentina rescata la fuerza de la fotosíntesis como símbolo de aquello que vive, que vibra, que transforma...</p>
						</div>
						<div class="newsbox__share">
							<h6 class="newsbox__label">COMPARTÍ</h6>
							<div class="newsbox__social">
								<x-shared></x-shared>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="notas">
		<div class="container">
			@include('partials.masonry.list')
		</div>
	</section>
</div>
@endsection

@section('sidebar')
  {{-- @include('sections.sidebar') --}}
@endsection
