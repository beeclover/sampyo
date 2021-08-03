<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

use function DeliciousBrains\WPMDB\Container\DI\string;

class Items extends Component
{
    private $label = null;
    public $terms;
    private $type = "components.items";
    public $link;
    public $id = 0;

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
        if (isset(get_queried_object()->term_id) && !empty($id = get_queried_object()->term_id)) {
            $this->id = $id;
        }
    }

    public function render()
    {
        if (!is_null($this->label)) {
            return $this->view($this->type);
        }
    }
}
