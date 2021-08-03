<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Archive extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'header-archive',
        'archive',
        'archive-*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => $this->title(),
            'description' => $this->description(),
            'category_label' => $this->category_label(),
        ];
    }

    public function title()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            $post_type = explode("_", $title);
            $post_type_data = get_post_type_object($post_type[0]);
            return $post_type_data->label;
        }
        return get_the_archive_title();
    }

    public function description()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            $post_type = explode("_", $title);
            $post_type_data = get_post_type_object($post_type[0]);
            return $post_type_data->description;
        }
        return get_the_archive_description();
    }


    public function category_label()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            return $title;
        }
        return get_post_type().'_category';
    }
}
