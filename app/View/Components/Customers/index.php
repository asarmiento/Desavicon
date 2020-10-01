<?php

namespace App\View\Components\Customers;

use Illuminate\View\Component;

class Cusmtomers extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
