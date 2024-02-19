@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<div class="fotogaleria-hero">
    <div class="fotogaleria-hero__image">
        <x-imagen width="1920" height="750"></x-imagen>
    </div>
    <div class="container">
        <div class="fotogaleria-hero__content">
            <h4 class="fotogaleria-hero__section">
                <a href="#" class="fotogaleria-hero__inner">
                    <span class="fotogaleria-hero__icon"><img src="@asset('images/icons/fotogaleria.svg')" width="24" height="25" alt="FOTOGALERÍA"/></span>
                    FOTOGALERÍAS
                </a>
            </h4>
            <h1 class="fotogaleria-hero__title">{!! $titulo !!}</h1>
            <p class="fotogaleria-hero__by">POR {!! $autores !!}</p>
            <h5 class="fotogaleria-hero__date"><time class="dt-published" datetime="{{ get_post_time('c', true) }}">{!! $fecha !!}</time></h5>
        </div>
    </div>
</div>
<section class="nota fotogalerias con-relacionadas">
    <div class="container">
        <div class="nota__column">
            <div class="nota__tools">
                <div class="nota__share">
                    <h6 class="nota__label">COMPARTÍ</h6>
                    <div class="nota__social">
                        <x-shared></x-shared>
                    </div>
                </div>
                <div class="nota__comenta">
                    <a href="#comenta" class="anchorLink">
                        <strong>{!! $n_comentarios !!}</strong>
                        <img src="@asset('images/icons/icono-comenta.svg')" width="20" height="21" alt="Comentá"/><span>Comentá</span>
                    </a>
                </div>
                <div class="widget-area">
                    <x-fbBtnLike></x-fbBtnLike>
                </div>
            </div>
            <div class="outside-element"><hr class="nota__hline"></div>
            <div class="nota__articulo">
                <div class="nota__content">
                    {!! $contentido !!}
                </div>
                <div class="content-widget-area">
                    <x-fbComment></x-fbComment>
                </div>
            </div>
        </div>

        <div class="nota__row-relacionadas">
            @includeFirst(['partials.relacionadas.content-' . get_post_type(), 'partials.relacionadas.content'])
        </div>
            
    </div>
</section>

@endwhile
@endsection

@section('sidebar')
@endsection