@while ($query->have_posts())
    @php($query->the_post())
    @includeFirst([
        'partials.masonry.items.content-' . get_post_type().'-'.get_post_format(), 
        'partials.masonry.items.content-' . get_post_type(), 
        'partials.masonry.items.content'
    ])
@endwhile
@php(wp_reset_postdata())
