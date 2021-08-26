<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class NoticeBoard extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive-notice-board',
        'partials.content-noticeBoard',
        'partials.content-single-notice-board'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'attechedFiles' => $this->attachemntFiles(),
          'thumbnail' => $this->thumbnail(),
        ];
    }

    public function attachemntFiles()
    {
        if ($this->view->name() !== 'partials.content-noticeBoard' || $this->view->name() !== 'partials.content-single-notice-board') {
            $attechedFiles = get_field('attached_files');
            return $attechedFiles;
        }
    }
    
    public function thumbnail()
    {
        return !empty(get_the_post_thumbnail()) ? get_the_post_thumbnail() : '';
    }
}
