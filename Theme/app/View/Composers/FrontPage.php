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
}
