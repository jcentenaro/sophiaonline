@extends('layouts.app')

@section('content')
<h1 class="section-title section-title--mini section-title--columnistas"><a href="#">Columnistas</a></h1>
<div class="columnista--bio">
    <div class="container">
        <div class="columnista-bio-grid">
            <figure class="columnista--bio-image"><img src="{!! $autor_imagen !!}" width="120" height="120" alt=""></figure>
            <div class="columnista--bio-data">
                <div class="columnista--bio-head">
                    <h2 class="columnista--bio-name">{!! $autor !!}</h2>
                    <h3 class="columnista--bio-title">{!! $desc_corta !!}</h3>
                </div>
                <p class="columnista--bio-text">{!! $autor_desc !!}</p>
                <div class="columnista--bio-cta">
                    
                    @if ($autor_twitter != null)
                        <a href="https://twitter.com/{!! $autor_twitter !!}" target="_blank"><img src="@asset('images/icons/share-twitter.svg')" width="24" height="24" alt="Twitter"/>@ {!! $autor_twitter !!}</a>
                    @endif
                    @if ($autor_facebook != null)
                        <a href="{!! $autor_facebook_link !!}" target="_blank"><img src="@asset('images/icons/share-facebook.svg')" width="24" height="24" alt="Twitter"/>@ {!! $autor_facebook !!}</a>
                    @endif
                    @if ($autor_instagram != null)
                        <a href="https://www.instagram.com/{!! $autor_instagram !!}" target="_blank"><img src="@asset('images/icons/icono-instagram.svg')" width="24" height="24" alt="Instagram"/>@ {!! $autor_instagram !!}</a>
                    @endif
                    
                    


                    
                    <a href="mailto:{!! $autor_email !!}"><img src="@asset('images/icons/newsletter.svg')" alt="NEWSLETTER" width="25" height="25"/>Escribirle</a>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="section-subtitle">Últimas columnas</h2>

<section class="notas">
    <div class="container">
        @include('partials.masonry.list')
    </div>
</section>

@endsection

@section('sidebar')
@endsection
