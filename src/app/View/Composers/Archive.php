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
        'partials.header-archive',
        'partials.header-archive-*',
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
            'path' => $this->currentPagePath(),
        ];
    }

    // 리팩토링 가능
    public function archiveData($taxonomyTitle)
    {
        $titleSlice = explode("_", $taxonomyTitle);
        $postType = $titleSlice[0];
        if ($postType === 'noticeboard') {
            $postType = 'notice-board';
        }
        $taxonomyType = $titleSlice[1];

        return [
            'postType' => $postType,
            'taxonomyType' => $taxonomyType,
        ];
    }

    public function title()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            $postType = $this->archiveData($title)['postType'];
            $taxonomyType = $this->archiveData($title)['taxonomyType'];
            $post_type_data = get_post_type_object($postType);
            return $post_type_data?->label;
        }
        return get_the_archive_title();
    }

    public function description()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            $postType = $this->archiveData($title)['postType'];
            $taxonomyType = $this->archiveData($title)['taxonomyType'];
            $post_type_data = get_post_type_object($postType);
            return $post_type_data?->description;
        }
        return get_the_archive_description();
    }

    public function currentPagePath()
    {
      if (!is_wp_error(get_post_type())) {
        return get_post_type();
      }
      global $wp;
      return $wp->request;
    }
}
