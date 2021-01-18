<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormDaterange extends Component
{

    public $title;
    public $model;

    /**
     * FormInput constructor.
     * @param string $title
     * @param $model
     */
    public function __construct($title, $model)
    {
        $this->title = $title;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.form.form-daterange');
    }
}
