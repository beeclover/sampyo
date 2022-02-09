<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use function DeliciousBrains\WPMDB\Container\DI\object;

class Blog extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-newsroom',
        'partials.content-single-blog',
        'partials.header-archive-newsroom',
        'partials.nav-fixed',
        'taxonomy-blog*'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'categories' => $this->categories(),
            'category_label' => $this->category_label(),
            'useFilterCatLabel' => $this->useFilterCatLabel(),
            'fixedMenu' => $this->fixedMenu(),
            'fixedMenuLabel' => $this->getFixedMenuLabel(),
            'selected' => $this->selected(),
            'title' => $this->title(),
            'tags' => $this->getTags(),
        ];
    }

    public function categories()
    {
        return wp_get_post_terms(get_the_ID(), get_post_type(). '_category');
    }

    public function category_label()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            return $title;
        }
        return get_post_type().'_category';
    }

    public function useFilterCatLabel()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            return 'test';
        }
        $title = get_post_type().'_category';
        if ($title === 'notice-board_category') {
            $title = 'noticeboard_category';
        }
        return $title;
    }

    public function nameToObject($name)
    {
        $result = get_post_type_object($name);
        $result->term_taxonomy_id = 0;
        $result->permalink = get_post_type_archive_link($name);
        if ($name === 'notice-board') {
            $name = 'noticeboard';
        }
        $result->children = Newsroom::get_category($name);
        return $result;
    }

    public function fixedMenu()
    {
        $menu = [
          'blog' => $this->nameToObject('blog'),
          'media' => $this->nameToObject('media'),
          'noticeBoard' => $this->nameToObject('notice-board'),
        ];
        return $menu;
    }

    public function getFixedMenuLabel()
    {
        $archive_title = get_the_archive_title();
        if ($archive_title === '보관함') {
            $post_type_obj = get_post_type_object(get_post_type());
            // echo $post_type_obj->labels->singular_name; //Ice Cream.
            return $post_type_obj->labels->name; //Ice Creams.
        }
        return get_the_archive_title();
    }

    public function selected()
    {
        if (get_post_type() === 'notice-board') {
            return 0;
        }
        $post = get_post();
        if (isset($post) && $terms = get_the_terms($post->ID, get_post_type().'_category')) {
            return $terms[0]->term_id;
        }
        return 0;
    }

    public static function title()
    {
        if (is_archive()) {
            return get_the_archive_title();
        }
        return get_post_type_object(get_post_type())->labels->singular_name;
    }

    public static function getTags()
    {
        $post = get_post();
        if (isset($post) && $terms = get_the_terms($post->ID, get_post_type().'_tag')) {
            return $terms;
        }
    }
}
