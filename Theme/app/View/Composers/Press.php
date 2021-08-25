<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Press extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-press',
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

        var_dump($attechedFiles);
        return $attechedFiles;
    }
}
