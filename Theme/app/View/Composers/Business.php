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
          'fixedMenu' => $this->BusinessArchiveSetMenu($this->fixedMenu()),
          'selected' => $this->selected(),
          'acf' => $this->get_business_info(),
        ];
    }

    public function sort_terms_hierarchically(array &$posts, array &$into)
    {
        foreach ($posts as $i => $post) {
            $post->permalink = get_the_permalink($post->ID);
            if ($post->ID) {
                $post->term_id = get_the_terms($post->ID, 'business_category');
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
          'post_type' => 'business',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        $this->sort_terms_hierarchically($posts, $termsHierarchy);
        $cat = get_terms([
          'taxonomy' => 'business_category',
        ]);
        $this->sort_terms_hierarchically($cat, $termsHierarchy);
        $t = array();
        $this->set_terms_hierarchically($termsHierarchy, $t);
        return $t;
    }
    public function BusinessArchiveSetMenu($fixedMenu)
    {
        $origin_jobs = get_post_type_object('business');
        $jobs = new \stdClass();
        $jobs->ID = false;
        $jobs->term_taxonomy_id = false;
        $jobs->post_title = $origin_jobs->label;
        $jobs->permalink = "/{$origin_jobs->has_archive}";
        array_push($fixedMenu, $jobs);

        return $fixedMenu;
    }

    public function selected()
    {
        $post = get_post();
        if ($terms = get_the_terms($post->ID, 'business_category')) {
            return $terms[0]->term_id;
        }
        return 0;
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
