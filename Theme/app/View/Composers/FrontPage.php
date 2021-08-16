<?php

namespace App\View\Composers;

use DeliciousBrains\WPMDB\Container\DI\Definition\Resolver\ObjectCreator;
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
}
