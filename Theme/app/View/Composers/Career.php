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
            'fixedMenu' => $this->fixedMenu(),
            'selected' => $this->selected(),
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

    public function sort_terms_hierarchically(array &$posts, array &$into)
    {
        foreach ($posts as $i => $post) {
            $post->permalink = get_the_permalink($post->ID);
            if ($post->ID) {
                $post->term_id = get_the_terms($post->ID, 'career_category');
            } else {
                // taxnomoy를 포스트 배열에 추가
                $post->term_id = 0;
                $into['term_'.$post->term_taxonomy_id] = $post;
                unset($posts[$i]);
                continue;
            }

            if ($post->ID && $post->term_id) {
                $post->term_id = $post->term_id[0]->term_id;
            } else {
                $post->term_id = 0;
            }

            $into[$post->ID] = $post;
            unset($posts[$i]);
        }
    }

    public function set_terms_hierarchically(array &$posts, array &$into, $parentId = 0)
    {
        foreach ($posts as $i => $post) {
            if ($post->term_id === $parentId || $post->term_taxonomy_id === $parentId) {
                if ($post->term_taxonomy_id) {
                    $into['term_'.$post->term_taxonomy_id] = $post;
                } else {
                    $into[$post->ID] = $post;
                }
                unset($posts[$i]);
            }
        }

        foreach ($into as $parentPost) {
            $parentPost->children = array();
            if ($parentPost->term_taxonomy_id) {
                $this->set_terms_hierarchically($posts, $parentPost->children, $parentPost->term_taxonomy_id);
            }
        }
    }

    public function fixedMenu()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'career',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        $this->sort_terms_hierarchically($posts, $termsHierarchy);
        $cat = get_terms([
          'taxonomy' => 'career_category',
        ]);
        $this->sort_terms_hierarchically($cat, $termsHierarchy);
        $t = array();
        $this->set_terms_hierarchically($termsHierarchy, $t);
        return $t;
    }

    public function selected()
    {
        $post = get_post();
        if ($terms = get_the_terms($post->ID, 'career_category')) {
            return $terms[0]->term_id;
        }
        return 0;
    }
}
