<div class="grid-type-masonry">
    <!-- MASONRY SETUP -->
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <!-- FIN MASONRY SETUP -->
    @if ($nota_destacada)
        <x-destacadaNota></x-destacadaNota>
    @endif
    @while(have_posts()) @php(the_post())
        <div class="grid-type-masonry__item">
            <x-itemMasonry></x-itemMasonry>
            {{-- @includeFirst([ 'partials.masonry.items.content-' . get_post_type().'-'.get_post_format(), 'partials.masonry.items.content-' . get_post_type(), 'partials.masonry.items.content' ]) --}}
        </div>
    @endwhile

</div>

<!-- MAS NOTAS -->
<div id="carga_mas" class="grid-type-masonry__cta" >
    <a data-paged="2" href="#" class="btn btn--big">+ {!! $btn_name !!}</a>
</div>


