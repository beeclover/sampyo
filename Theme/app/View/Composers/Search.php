<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Search extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'search',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'allCount' => $this->allCount()
        ];
    }

    public function allCount()
    {
        global $wp_query;
        if (isset($wp_query->found_posts)) {
            return $wp_query->found_posts;
        }
        return '';
    }
}
