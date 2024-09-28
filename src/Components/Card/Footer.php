<?php

namespace Castro\Shadblade\Components\Card;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $class = '',
        public string $style = '',
        public bool $disabled = false
    )
    {
        if($this->id === '') $this->id = Str::random(20);
        if($this->name === '') $this->name = Str::random(20);
    }

    public function render(): ViewContract|Closure|string
    {
        return View::make('shadblade::components.card.footer');
    }
}
