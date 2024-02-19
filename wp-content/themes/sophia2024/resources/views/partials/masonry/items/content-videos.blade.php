<div class="newsbox alianzas videos">
    @if (!is_post_type_archive('videos'))
        <div class="newsbox__head">
            <h5 class="newsbox__section"><a href="{{ get_post_type_archive_link('videos') }}" class="newsbox__inner"><span class="newsbox__icon"><img src="@asset('images/icons/video.svg')" width="24" height="25" alt="VIDEO"/></span>VIDEO</a></h5>
            <h5 class="newsbox__others"><a href="{{ App\helpers::linkSection('videos') }}">OTROS VIDEOS</a></h5>
        </div>
    @endif
    <div class="newsbox__group-container">
        <div class="newsbox__image newsbox__image-type-video">
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
