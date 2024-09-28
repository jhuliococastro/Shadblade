<?php

namespace Castro\Shadblade\Components\Input;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\View\Component;

class Input extends Component
{
    protected array $allowedTypes = ['text', 'email', 'password', 'url'];

    public function __construct(
        public string $id = '',
        public string $type = 'text',
        public string $name = '',
        public string $class = '',
        public string $style = '',
        public bool $disabled = false
    ){
        if($this->id === '') $this->id = Str::random(20);
        if($this->name === '') $this->name = Str::random(20);
        if($this->type !== 'text'){
            if(!in_array($this->type, $this->allowedTypes)){
                throw new \Exception("The type '$this->type' is not allowed. The allowed types are: " . implode(', ', $this->allowedTypes));
            }
        }
    }

    public function render(): ViewContract|Closure|string
    {
        return View::make('shadblade::components.input.input');
    }
}
