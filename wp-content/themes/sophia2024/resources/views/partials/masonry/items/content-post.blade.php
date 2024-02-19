<div @php(post_class('newsbox general'))>




    <div class="newsbox__group-container">
        <div class="newsbox__image">
            <a href="{{ get_permalink() }}"><x-imagen></x-imagen></a>
        </div>
        <div class="newsbox__group">
            <div class="newsbox__content">
                <x-TagCategoria class="newsbox__inner"></x-TagCategoria>
                <h3 class="newsbox__title"><a href="{{ get_permalink() }}">@php(the_title())</a></h3>
                <p class="newsbox__text">@php(the_excerpt())</p>
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