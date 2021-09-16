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
          'business' => Business::fixedMenu(),
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

    public function sort_terms_hierarchically(array &$posts, array &$into, $parentId = 0)
    {
        foreach ($posts as $i => $post) {
            // 부모 포스트에서 필요한 정보
            if ($parentId === 0) {
                $post->description = get_the_excerpt($post->ID);
                $post->thumbnail = get_the_post_thumbnail_url($post->ID);
            }
            // 전체 포스트에서 필요한 정보
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

        
        $media = get_posts([
          'post_type' => 'media',
          'numberposts' => 4,
          "hide_empty" => false,
        ]);

        $media = array_map(function ($post) {
            return $this->setPostData($post, 'media');
        }, $media);

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
          'media' => $media,
          'noticeBoard' => $noticeBoard,
        );
    }
}
