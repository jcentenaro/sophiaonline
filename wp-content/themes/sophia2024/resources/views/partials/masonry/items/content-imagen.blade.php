<div @php(post_class('newsbox newsbox--boxed'))>
    <div class="newsbox__group-container">
        <div class="newsbox__image">
            <a href="{{ get_permalink() }}"><x-imagen></x-imagen></a>
        </div>
        <div class="newsbox__group">
            <div class="newsbox__content">
                <h3 class="newsbox__title"><a href="{{ get_permalink() }}">@php(the_title())</a></h3>
                <h4 class="newsbox__autor"><a href="#">Por <strong>{{ get_author_name() }}</strong></a></h4>
            </div>
            <div class="newsbox__share">
                <h6 class="newsbox__label">COMPARTÍ</h6>
                <div class="newsbox__social">
                    <x-shared></x-shared>
                </div>
            </div>
        </div>
    </div>
</div>

