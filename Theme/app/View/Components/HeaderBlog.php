<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class HeaderBlog extends Component
{
    public $title;
    public $category_label;
    public $description;

    public function __construct($postType = '')
    {
        $post_type_data = get_post_type_object($postType);
        $this->description = $post_type_data->description;
        $this->title = $post_type_data->label;
        $this->category_label = $postType.'_category';
    }

    public function render()
    {
        return $this->view("components.header-blog");
    }
}
