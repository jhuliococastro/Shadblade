<?php

namespace Castro\Shadblade\Components\Form;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public string $id = '',
        public string $class = '',
        public string $style = '',
    ){
        if($this->id === '') $this->id = Str::random(20);
    }

    public function render(): ViewContract|Closure|string
    {
        return View::make('shadblade::components.form.item');
    }
}
