<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Items extends Component
{
    private $label = null;
    public $terms;
    private $type = "components.items";
    public $link;
    public $current = [];

    public function get_terms(): void
    {
        $this->terms = get_terms(array(
        "taxonomy" => $this->label,
        "hide_empty" => false,
        "parent" => 0
      ));
    }

    public function get_link(): void
    {
        $ex = explode("_", $this->label);
        $im = implode("/", $ex);
        $this->link = "/{$im}/";
    }

    public function set_current()
    {
        // Taxonomy archive 페이지일때
        if (isset(get_queried_object()->term_id)) {
            $data = get_queried_object();
            array_push($this->current, $data->term_id);
        }

        // POST current
        // if (isset(get_queried_object()->post_name)) {
        //     $terms = wp_get_post_terms(get_the_ID(), $this->label);
        //     foreach ($terms as $term) {
        //         array_push($this->current, $term->term_id);
        //     }
        // }
    }

    public function __construct($label, $type)
    {
        if (!empty($label)) {
            $this->label = $label;
            $this->get_terms();
        }
        if (!empty($type)) {
            $this->type = "components.items-".$type;
        }
        $this->get_link();
        $this->set_current();
    }

    public function render()
    {
        if (!is_null($this->label)) {
            return $this->view($this->type);
        }
    }
}
