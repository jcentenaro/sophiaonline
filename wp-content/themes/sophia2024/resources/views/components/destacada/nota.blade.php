<div class="grid-type-masonry__item grid-type-masonry__item--width2">
    <div class="newsbox general">
        <div class="newsbox__group-container">
            <div class="newsbox__image">
                <a href="{!! $link !!}"><img src="{{ $image }}')" width="720" height="453" alt=""></a>
            </div>
            <div class="newsbox__group">
                <div class="newsbox__content">
                    <h4 class="newsbox__category"><a href="#" class="newsbox__inner">Cocina</a></h4>
                    <h3 class="newsbox__title"><a href="{!! $link !!}">{!! $title !!}</a></h3>
                    {{-- <p class="newsbox__text">{!! $desc !!}</p> --}}
                </div>
                <div class="newsbox__share">
                    <h6 class="newsbox__label">COMPARTÍ</h6>
                    <div class="newsbox__social">
                        <x-shared link="{{ $link }}" title="{{ $title }}" type="white"></x-shared>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
