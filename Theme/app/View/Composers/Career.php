<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class career extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-career',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'queriedCat' => $this->queriedCat(),
        ];
    }

    public function queriedCat()
    {
        $post = get_post();
        $cat = get_the_terms($post, 'career_category');
        if (!empty($cat)) {
            $posts = get_posts([
              'post_type' => 'career',
              "tax_query" => array(array(
                "taxonomy" => "career_category",
                "field" => "slug",
                "terms" => $cat[0]->slug
              ))
            ]);
            return $posts;
        }
    }
}
