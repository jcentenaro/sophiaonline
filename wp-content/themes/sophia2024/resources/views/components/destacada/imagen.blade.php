<section class="nota-principal">
    <div class="container">
        <div class="newsbox newsbox--boxed">
            <div class="newsbox__image">
                <a href="{!! $link !!}"><img src="{{ $image }}" width="573" height="383" alt=""/></a>
            </div>
            <div class="newsbox__group-container">
                <div class="newsbox__head">
                    <h5 class="newsbox__section"><a href="{!! $link !!}" class="newsbox__inner"><span class="newsbox__icon"><img src="@asset('images/icons/fotogaleria.svg')" width="24" height="25" alt="FOTOGALERÍA"/></span>FOTOGALERÍA</a></h5>
                    <h5 class="newsbox__others"><a href="{{ App\helpers::linkSection('imagen') }}">OTRAS FOTOGALERÍAS</a></h5>
                </div>
                <div class="newsbox__group">
                    <div class="newsbox__content">
                        <h3 class="newsbox__title"><a href="{!! $link !!}">{!! $title !!}</a></h3>
                        <h4 class="newsbox__autor"><a href="#">Por <strong>Alix Born</strong></a></h4>
                        {{-- <p class="newsbox__text">{!! $desc !!}</p> --}}
                    </div>
                    <div class="newsbox__share">
                        <h6 class="newsbox__label">COMPARTÍ</h6>
                        <div class="newsbox__social">
                            <x-shared link="{{ $link }}" title="{{ $title }}"></x-shared>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>