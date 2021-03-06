<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Sustainability extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-sustainability',
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
        ];
    }

    public static function sort_terms_hierarchically(array &$posts, array &$into, $parentId = 0, $custom = null)
    {
        foreach ($posts as $i => $post) {
            $post->permalink = get_the_permalink($post->ID);

            if ($post->post_parent == $parentId) {
                if ($custom) {
                    $post = $custom($post, $parentId);
                }
                
                if ($post) {
                    $into[$post->ID] = $post;
                }
                unset($posts[$i]);
            }
        }

        foreach ($into as $parentPost) {
            $parentPost->children = array();
            self::sort_terms_hierarchically($posts, $parentPost->children, $parentPost->ID, $custom);
        }
    }

    public static function fixedMenu()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'sustainability',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        self::sort_terms_hierarchically($posts, $termsHierarchy);
        return $termsHierarchy;
    }
}
