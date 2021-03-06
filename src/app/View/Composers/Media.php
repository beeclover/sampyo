<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class media extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-media',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'outlink' => $this->getOutlink(),
            'attechedFiles' => $this->getAttechedFiles(),
            'categories' => $this->categories(),
            'tags' => Blog::getTags(),
        ];
    }

    public function getOutlink()
    {
        $original_link = get_field('original_link');

        return $original_link;
    }

    public function getAttechedFiles()
    {
        $attechedFiles = get_field('attached_files');
        return $attechedFiles;
    }

    public function categories()
    {
        return wp_get_post_terms(get_the_ID(), get_post_type(). '_category');
    }
}
