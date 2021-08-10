<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Newsroom extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-newsroom',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'pin_blog' => $this->get_pin_post("blog"),
          'blog_posts' => $this->get_posts("blog"),
          'blog_cat' => $this->get_category("blog"),
          'press_posts' => $this->get_banner_posts("press"),
          'notice_posts' => $this->get_def_posts("notice-board"),
        ];
    }

    public function set_post_data($post, $postType)
    {
        $post->permalink = get_the_permalink($post->ID);
        $post->thumbnail = get_the_post_thumbnail_url($post->ID);
        $post->excerpt = get_the_excerpt($post->ID);
        $post->post_content = "";
        // 카테고리 추가
        if ($cats = get_the_terms($post->ID, $postType."_category")) {
            $post->category = array_map(function ($cat) use ($postType) {
                $cat->link = "/{$postType}/category/".$cat->slug;
                return $cat;
            }, $cats);
        } else {
            $post->category = [];
        }

        return $post;
    }

    public function get_pin_post($postType)
    {
        $pintpost = get_posts(
            array(
              'post_type' => $postType,
              'numberposts' => 1,
              'meta_query' => array(
                  array(
                      'key' => 'pin',
                      'value' => true
                  )
              )
          )
        );
        if (count($pintpost) === 0) {
            $pintpost = get_posts(
                array(
                'post_type' => $postType,
                'numberposts' => 1,
            )
            );
        }

        $post = $this->set_post_data($pintpost[0], $postType);

        return $post;
    }

    public function get_posts($postType)
    {
        $posts = get_posts(array(
          'post_type' => $postType,
          'numberposts' => 10,
        ));

        if (count($posts) === 0) {
            return;
        }

        $posts = array_map(function ($post) use ($postType) {
            return $this->set_post_data($post, $postType);
        }, $posts);

        return $posts;
    }

    public function get_banner_posts($postType)
    {
        $posts = get_posts(array(
        'post_type' => $postType,
        'numberposts' => 5,
        'meta_query' => array(array('key' => '_thumbnail_id'))
      ));

        if (count($posts) === 0) {
            return;
        }

        $posts = array_map(function ($post) use ($postType) {
            return $this->set_post_data($post, $postType);
        }, $posts);

        return $posts;
    }

    public function get_category($postType)
    {
        $terms = get_terms(array(
          "taxonomy" => $postType. '_category',
          "hide_empty" => false,
          "parent" => 0
        ));
        foreach ($terms as $term) {
            $term->link = "/{$postType}/category/{$term->slug}";
        }
        return $terms;
    }

    public function get_def_posts($postType)
    {
        $posts = get_posts(array(
          'post_type' => $postType,
        ));
        foreach ($posts as $post) {
            $post->date = get_the_date('Y-m-d', $post->ID);
        }
        return $posts;
    }
}
