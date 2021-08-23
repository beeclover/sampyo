<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Business extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-business',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'fixedMenu' => $this->fixedMenu(),
          'acf' => $this->get_business_info(),
        ];
    }

    public function sort_terms_hierarchically(array &$posts, array &$into, $parentId = 0)
    {
        foreach ($posts as $i => $post) {
            $post->permalink = get_the_permalink($post->ID);

            if ($post->post_parent == $parentId) {
                $into[$post->ID] = $post;
                unset($posts[$i]);
            }
        }

        foreach ($into as $parentPost) {
            $parentPost->children = array();
            $this->sort_terms_hierarchically($posts, $parentPost->children, $parentPost->ID);
        }
    }

    public function fixedMenu()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'business',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        $this->sort_terms_hierarchically($posts, $termsHierarchy);
        return $termsHierarchy;
    }

    public function get_business_info()
    {
        $outlink = get_field('outlink');
        $area = get_field('business-establishment');
        
        return [
          'outlink' => $outlink,
          'area' => $area
        ];
    }
}
