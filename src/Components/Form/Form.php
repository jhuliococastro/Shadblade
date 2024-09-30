<?php

namespace Castro\Shadblade\Components\Form;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;

class Form extends Component
{
    public string $framework;

    public function __construct(
        public string $id = '',
        public string $class = '',
        public string $style = '',
        public string $submit = '',
    ){
        if($this->id === '') $this->id = Str::random(20);

        $this->framework = Config::get('shadblade.framework');
        if($this->framework === 'livewire'){
            if($this->submit === ''){
                throw new \Exception("If the framework is 'livewire', the submit is required.");
            }
        }
    }

    public function render(): ViewContract|Closure|string
    {
        return View::make('shadblade::components.form.form');
    }
}
