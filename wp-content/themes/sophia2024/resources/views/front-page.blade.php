@extends('layouts.app')

@section('content')
<!-- MAIN -->
<x-destacadaImagen></x-destacadaImagen>
<!-- NOTAS HOME -->
<section class="notas">
    <div class="container">
        @include('partials.masonry.list')
    </div>
</section>

<section class="prefooter">
    <div class="container">
        <div class="grid-type-3">
            <div class="prefooter-item">
                @if(!dynamic_sidebar('sidebar-footer1'))
                <x-popularPost></x-popularPost>
                @endif
            </div>
            <div class="prefooter-item">
                @if(!dynamic_sidebar('sidebar-footer2'))
                <h3 class="prefooter-item__title"><a href="#"><span>Carta</span> de la semana</a></h3>
                <div class="prefooter-item__content">
                    <div class="prefooter-item__content-grid">
                        <div class="prefooter-item__content-data">
                            <h5 class="prefooter-item__content-date">21.11.2023</h5>
                            <h4 class="prefooter-item__content-title"><a href="#">Desplegar ahora</a></h4>
                            <p class="prefooter-item__content-text">Y pasa la vida y pasan muchísimas cosas y decidís desplegar o no habrá más tiempo. Y lo pensás y lo ...</p>
                        </div>
                        <div class="prefooter-item__content-image">
                            <figure><a href="#"><img src="@asset('images/temp/carta-semanal.jpg')" alt="" width="142" height="95"/></a></figure>
                            <a href="{{ App\helpers::linkSection('form_carta') }}" class="btn">¡ENVIÁ TU CARTA!</a>
                            <a href="{{ App\helpers::linkSection('cartas') }}" class="lnk">CARTAS ANTERIORES</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="prefooter-item">
                @if(!dynamic_sidebar('sidebar-footer3'))
                <h3 class="prefooter-item__title">Anunciá en <span>Sophia</span></h3>
                <div class="prefooter-item__content">
                    <div class="prefooter-item__content-grid">
                        <div class="prefooter-item__content-data">
                            <p class="prefooter-item__content-text">Si compartis el espiritu Sophia no dejes de descargar nuestro MEDIAKIT para conocer mas sobre nosotros y los espacios que tenemos para ofrecerle a tu marca.</p>
                        </div>
                        <div class="prefooter-item__content-image">
                            <figure><a href="{{ App\helpers::linkSection('pauta') }}"><img src="@asset('images/temp/anuncie.jpg')" alt="" height="94" width="141"/></a></figure>
                            <a href="{{ App\helpers::linkSection('pauta') }}" class="btn">PAUTÁ EN SOPHIA</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- FIN MAIN -->











  @endsection

@section('sidebar')
  {{-- @include('sections.sidebar') --}}
@endsection
