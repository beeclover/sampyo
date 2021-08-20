<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'readmore' => $this->readmore(),
          'heroVideo' => $this->heroVideo(),
          'business' => $this->business(),
          'newsroom' => $this->getNewsroom(),
        ];
    }

    public function readmore()
    {
        $readmore1 = get_theme_file_uri('resources/images/readmore.png');
        $readmore2 = get_theme_file_uri('resources/images/readmore@2x.png');
        $readmore3 = get_theme_file_uri('resources/images/readmore@3x.png');
        $el = "<img src='{$readmore1}' srcset='{$readmore2} 2x,{$readmore3} 3x' alt='' >";

        return $el;
    }
    
    public function heroVideo()
    {
        return get_theme_file_uri('resources/video/hero-video.mp4');
    }

    public function setBusiness($term)
    {
        $children = get_terms([
          'taxonomy' => 'business_category',
          'parent' => $term->term_id,
          'hide_empty' => false,
        ]);

        $children = array_map(function ($cat) {
            $cat->link = "/business/category/".$cat->slug;
            return $cat;
        }, $children);

        $term->children = $children;
        $term->thumbnail = get_field('thumbnail', $term->term_id);

        return $term;
    }

    public function business()
    {
        $terms = get_terms([
          'taxonomy' => 'business_category',
          'hide_empty' => false,
          "parent" => 0
        ]);
        $terms = array_map(function ($term) {
            return $this->setBusiness($term);
        }, $terms);
        return $terms;
    }

    public function setPostData($post, $postType)
    {
        $post->permalink = get_the_permalink($post->ID);
        $post->thumbnail = get_the_post_thumbnail_url($post->ID);
        $post->excerpt = get_the_excerpt($post->ID);
        $post->date = get_the_date('Y.m.d', $post->ID);
        $post->post_content = "";
        // 카테고리 추가
        $cats = get_the_terms($post->ID, $postType."_category");
        if (!is_wp_error($cats) && !empty($cats)) {
            $post->category = array_map(function ($cat) use ($postType) {
                $cat->link = "/{$postType}/category/".$cat->slug;
                return $cat;
            }, $cats);
        } else {
            $post->category = [];
        }

        return $post;
    }

    /**
     * @return array
     */
    public function getNewsroom()
    {
        $blog = get_posts([
          'post_type' => 'blog',
          'numberposts' => 4,
          "hide_empty" => false,
        ]);

        $blog = array_map(function ($post) {
            return $this->setPostData($post, 'blog');
        }, $blog);

        
        $press = get_posts([
          'post_type' => 'press',
          'numberposts' => 4,
          "hide_empty" => false,
        ]);

        $press = array_map(function ($post) {
            return $this->setPostData($post, 'press');
        }, $press);

        $noticeBoard = get_posts([
          'post_type' => 'notice-board',
          'numberposts' => 4,
          "hide_empty" => false,
        ]);

        $noticeBoard = array_map(function ($post) {
            return $this->setPostData($post, 'notice-board');
        }, $noticeBoard);

        return array(
          'blog' => $blog,
          'press' => $press,
          'noticeBoard' => $noticeBoard,
        );
    }
}
