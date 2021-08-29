<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SampyoGroup extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-sampyo-group',
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
          'businessTable' => $this->getBusinessTable(),
        ];
    }

    public function sort_terms_hierarchically(array &$posts, array &$into, $parentId = 0, $custom = null)
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
            $this->sort_terms_hierarchically($posts, $parentPost->children, $parentPost->ID, $custom);
        }
    }

    public function fixedMenu()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'sampyo-group',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        $this->sort_terms_hierarchically($posts, $termsHierarchy);
        return $termsHierarchy;
    }

    public function getBusinessTable()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'business',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        $this->sort_terms_hierarchically($posts, $termsHierarchy, 0, function ($post, $parentId) {
            if ($parentId == 0) {
                return $post;
            }
            
            $miniThumbnail = get_field('sampyo_thumbnail', $post->ID);
            if ($miniThumbnail) {
                $post->miniThumbnail = $miniThumbnail;
            } else {
                $post = null;
            }
            return $post;
        });
        return $termsHierarchy;
    }
}
