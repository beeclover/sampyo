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
          'selected' => $this->selected(),
          'acf' => $this->get_business_info(),
          'bluecon' => get_post()->post_name === 'blue-con' ? $this->bluecon() : null,
        ];
    }

    public static function sort_terms_hierarchically(array &$posts, array &$into)
    {
        foreach ($posts as $i => $post) {
            $post->permalink = get_the_permalink($post->ID);
            if ($post->ID) {
                $post->term_id = get_the_terms($post->ID, 'business_category');
            } else {
                // taxnomoy를 포스트 배열에 추가
                $post->term_id = 0;
                $post->thumbnail = get_field('thumbnail', $post->taxonomy . '_' . $post->term_taxonomy_id);
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

    public static function set_terms_hierarchically(array &$posts, array &$into, $parentId = 0)
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
                self::set_terms_hierarchically($posts, $parentPost->children, $parentPost->term_taxonomy_id);
            }
        }
    }

    public static function fixedMenu()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'business',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        self::sort_terms_hierarchically($posts, $termsHierarchy);
        $cat = get_terms([
          'taxonomy' => 'business_category',
        ]);
        self::sort_terms_hierarchically($cat, $termsHierarchy);
        $t = array();
        self::set_terms_hierarchically($termsHierarchy, $t);
        return $t;
    }

    public function selected()
    {
        $post = get_post();
        if ($terms = get_the_terms($post->ID, 'business_category')) {
            return $terms[0]->term_id;
        }
        return 0;
    }

    public function filter_addr(&$addr)
    {
        foreach ($addr as $key => $value) {
            if ($key === 'acf_fc_layout') {
                unset($addr[$key]);
            }
            if (is_array($value)) {
                $this->filter_addr($addr[$key]);
            }
        }
    }

    public function get_business_info()
    {
        $outlink = get_field('outlink');
        $area = get_field('business-establishment');
        $address = get_field('addr');
        if ($address) {
            $this->filter_addr($address);
        }
        return (!empty($outlink) || !empty($area) || !empty($address)) ? [
          'outlink' => $outlink,
          'area' => $area,
          'address' => $address,
        ] : false;
    }

    public function bluecon()
    {
        $bluecon = [];
        for ($i=0; $i < 5; $i++) {
            $v = get_field('g'.$i);
            if ($v['youtube']) {
                $v['youtube'] = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "//www.youtube.com/embed/$2", $v['youtube']);
            }
            $bluecon['g'.$i] = $v;
        }
        return $bluecon;
    }
}
