<?php

/**
 * comment
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function wpd_testimonials_query($query)
{
    if (! is_admin()
      && $query->is_post_type_archive('blog')
      && $query->is_main_query()) {
        $query->set('posts_per_page', 5);
    }
}
add_action('pre_get_posts', 'wpd_testimonials_query');
