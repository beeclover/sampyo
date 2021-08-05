<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Newsroom extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-newsroom',
        'partials.content-single-blog',
        'partials.header-archive-newsroom',
        'taxonomy-blog*'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'categories' => $this->categories(),
            'like' => $this->like(),
            'category_label' => $this->category_label(),
        ];
    }

    public function categories()
    {
        return wp_get_post_terms(get_the_ID(), get_post_type(). '_category');
    }

    public function like()
    {
        return do_shortcode('[wp_ulike]');
    }

    public function category_label()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            return $title;
        }
        return get_post_type().'_category';
    }
}
