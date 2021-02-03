<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Summernote extends Component
{
    public $title;
    public $model;

    /**
     * FormSummernote constructor.
     * @param $title
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form.form-summernote');
    }
}
