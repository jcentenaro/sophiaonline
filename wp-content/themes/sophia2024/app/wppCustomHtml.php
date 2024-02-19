<?php

/**
 * Builds custom HTML.
 *
 * With this function, I can alter WPP's HTML output from my theme's functions.php.
 * This way, the modification is permanent even if the plugin gets updated.
 *
 * @param array $popular_posts
 * @param array $instance
 *
 * @return string
 */
function my_custom_popular_posts_html_list($popular_posts, $instance)
{
    $output = '<ul class="prefooter-item__list">'."\n";

    // loop the array of popular posts objects
    foreach ($popular_posts as $popular_post) {
        $output .= '<li>';
        $output .= '<a href="'.get_permalink($popular_post->id).'" title="'.esc_attr($popular_post->title).'">'.$popular_post->title.'</a>';
        $output .= '</li>'."\n";
    }

    $output .= '</ol>'."\n";

    return $output;
}
add_filter('wpp_custom_html', 'my_custom_popular_posts_html_list', 10, 2);
