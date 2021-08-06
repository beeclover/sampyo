<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.header-newsroom',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'thumbnail' => $this->thumbnail(),
            'permalink' => $this->permalink(),
            'excerpt' => $this->excerpt(),
            'pagination' => $this->pagination(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
    
    public function thumbnail()
    {
        return !empty(get_the_post_thumbnail()) ? get_the_post_thumbnail() : '';
    }
    
    public function permalink()
    {
        return get_permalink();
    }

    public function excerpt()
    {
        return get_the_excerpt();
    }

    public function pagination()
    {
        $dom = '<div class="page-pagination-article">';
        // 이전글
        $prev_post = get_previous_post();
        if (!empty($prev_post)) {
            $link = get_permalink($prev_post->ID);
            $title = apply_filters('the_title', $prev_post->post_title);
            $dom .= <<<HTML
              <div class="page-pagination-article-list prev">
                <span class="label">이전글</span>
                <a class="title" href="$link">$title</a>
              </div>
HTML;
        } else {
            $dom .= <<<HTML
            <div class="page-pagination-article-list prev">
              <span class="label">이전글</span>
              <span></span>
            </div>
HTML;
        }

        // 다음글
        $next_post = get_next_post();
        if (!empty($next_post)) {
            $link = get_permalink($next_post->ID);
            $title = apply_filters('the_title', $next_post->post_title);
            $dom .= <<<HTML
            <div class="page-pagination-article-list next">
              <span class="label">다음글</span>
              <a class="title" href="$link">$title</a>
            </div>
HTML;
        } else {
            $dom .= <<<HTML
            <div class="page-pagination-article-list next">
              <span class="label">다음글</span>
              <span></span>
            </div>
HTML;
        }

        $post_type = get_post_type();
        $dom .= <<<HTML
            <a class="page-pagination-article-menu" href="/$post_type">
              목록보기
            </a>
          </div>
HTML;
        return $dom;
    }
}
