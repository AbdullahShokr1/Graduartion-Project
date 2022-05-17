<?php

namespace App\View\Components;

use App\Models\SHome;
use Illuminate\View\Component;

class Homea extends Component
{
    public $title;
    public $my_home;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null)
    {
        $this->title =$title;
        $my_home = SHome::query()->where('id','=',1)->find(1);
        $this->my_home = $my_home;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('front.layouts.homea');
    }
}
