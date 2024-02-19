<div class="newsbox newsbox--imagebg">
    @if (!is_post_type_archive('entrevistas'))
    <div class="newsbox__head">
        <h5 class="newsbox__section"><a href="#" class="newsbox__inner"><span class="newsbox__icon"><img src="@asset('images/icons/entrevista.svg')" width="24" height="25" alt="ENTREVISTA"/></span>ENTREVISTA</a></h5>
        <h5 class="newsbox__others"><a href="{{ App\helpers::linkSection('entrevistas') }}">OTRAS ENTREVISTAS</a></h5>
    </div>
    @endif
    <div class="newsbox__group-container">
        <div class="newsbox__image">
            <a href="{{ get_permalink() }}"><x-imagen></x-imagen></a>
        </div>    
        <div class="newsbox__group">
            <div class="newsbox__content">
                <h3 class="newsbox__title"><a href="{{ get_permalink() }}">@php(the_title())</a></h3>
                {{-- <p class="newsbox__text">@php(the_excerpt())</p> --}}
            </div>
            <div class="newsbox__share">
                <h6 class="newsbox__label">COMPARTÍ</h6>
                <div class="newsbox__social">
                    <x-shared type="white"></x-shared>
                </div>
            </div>
        </div>
    </div>
</div>
