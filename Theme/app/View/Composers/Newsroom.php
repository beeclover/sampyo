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
}
