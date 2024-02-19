<div class="nota__relacionadas">
    <h3 class="nota__relacionadas__title">Más de <span>Videos</span></h3>
    <div class="grid-type-3">
        @while ($query->have_posts())
            @php($query->the_post())
            @includeFirst([
                'partials.masonry.items.content-' . get_post_type(), 
                'partials.masonry.items.content'
            ])
        @endwhile
        @php(wp_reset_postdata())
    </div>
</div>