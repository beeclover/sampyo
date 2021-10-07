<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Newsletter extends Component
{
    /**
     * The alert type.
     *
     * @var boolean
     */
    public $border;

    /**
     * The alert type.
     *
     * @var string
     */
    public $title;

    /**
     * Create the component instance.
     *
     * @param  string  $border
     * @param  string  $title
     * @return void
     */
    public function __construct($border = 'true', $title = '뉴스레터')
    {
        $this->title = $title;
        $this->border =  $border === 'true'? true: false;
    }

    public function render()
    {
        return $this->view('components.newsletter');
    }
}
