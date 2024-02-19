<div class="newsbox columnistas">
    @if (is_author())
        
    @else
    <div class="newsbox__head">
        <h5 class="newsbox__section"><a href="{!! $autor_link !!}" class="newsbox__inner"><span class="newsbox__writer"><img src="{!! $autor_imagen !!}" width="50" height="50" alt="{!! $autor !!}"/></span>{!! $autor !!}</a></h5>
        <h5 class="newsbox__others"><a href="{{ App\helpers::linkSection('columnistas') }}">OTROS COLUMNISTAS</a></h5>
    </div>
    @endif
    <div class="newsbox__group-container">
        <div class="newsbox__image">
            <a href="{{ get_permalink() }}"><x-imagen></x-imagen></a>
        </div>
        <div class="newsbox__group">
            <div class="newsbox__content">
                {{-- <x-TagCategoria class="newsbox__inner"></x-TagCategoria> --}}
                <h3 class="newsbox__title"><a href="{{ get_permalink() }}">@php(the_title())</a></h3>
            </div>
            <div class="newsbox__share">
                <h6 class="newsbox__label">COMPARTÍ</h6>
                <div class="newsbox__social">
                    <x-shared type="warning"></x-shared>
                </div>
            </div>
        </div>
    </div>
</div>
