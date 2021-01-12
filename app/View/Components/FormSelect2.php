<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSelect2 extends Component
{
    public $model;
    public $title;
    public $option;
    public $selected;

    /**
     * FormSelect2 constructor.
     * @param $model
     * @param $title
     * @param $option
     * @param $selected
     */
    public function __construct($model, $title, $option, $selected)
    {
        $this->model = $model;
        $this->title = $title;
        $this->option = $option;
        $this->selected = $selected;
    }

    public function isSelected($option)
    {
        return in_array($option, $this->selected);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.form-select2');
    }
}
