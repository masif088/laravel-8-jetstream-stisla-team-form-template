<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{

    public $type;
    public $title;
    public $model;

    /**
     * FormInput constructor.
     * @param string $type
     * @param string $title
     * @param string $data
     */
    public function __construct($type, $title, $model)
    {
        $this->type = $type;
        $this->title = $title;
        $this->model = $model;

    }



    /**
     * Create a new component instance.
     *
     * @return void
     */


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {

        return view('components.form.form-input');
    }
}
