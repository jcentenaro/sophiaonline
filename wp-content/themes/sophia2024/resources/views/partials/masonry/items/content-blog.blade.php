<div class="newsbox alianzas">
    <div class="newsbox__head">
        @if (is_tax())
            <h5 class="newsbox__section"><span class="newsbox__date">{{ the_date() }}</span></h5>
        
        @else
            <h5 class="newsbox__section"><a href="{!! $blog_link !!}" class="newsbox__inner">{!! $blog_nombre !!}</a></h5>
            <h5 class="newsbox__others"><a href="{!! $blog_link !!}">OTRAS NOTAS</a></h5>
        @endif
    </div>
    <div class="newsbox__group-container">
        <div class="newsbox__image">
            <a href="{{ get_permalink() }}"><x-imagen></x-imagen></a>
        </div>
        <div class="newsbox__group">
            <div class="newsbox__content">
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
