<?php

namespace Castro\Shadblade\Components\Button;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\View\Component;

class Button extends Component
{
    protected array $allowedTypes = ['button', 'submit', 'reset'];
    protected array $allowedVariants = ['primary', 'secondary', 'destructive', 'outline', 'link'];
    protected array $allowedSize = ['small', 'middle', 'large'];

    public function __construct(
        public string $id = '',
        public string $type = 'button',
        public string $name = '',
        public string $class = '',
        public string $style = '',
        public string $size = 'middle',
        public string $variant = 'primary',
        public bool $disabled = false
    ){
        if($this->id === '') $this->id = Str::random(20);
        if($this->name === '') $this->name = Str::random(20);

        if(!in_array($this->type, $this->allowedTypes)){
            throw new \Exception("The type '$this->type' is not allowed. The allowed types are: " . implode(', ', $this->allowedTypes));
        }

        if(!in_array($this->variant, $this->allowedVariants)){
            throw new \Exception("The variant '$this->variant' is not allowed. The allowed variants are: " . implode(', ', $this->allowedVariants));
        }else{
            $classVariant = match($this->variant){
                'primary' => 'bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded ',
                'secondary' => 'bg-gray-500 hover:bg-gray-600 text-black font-bold py-2 px-4 rounded ',
                'destructive' => 'bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ',
                'outline' => 'border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-bold py-2 px-4 rounded ',
                'link' => 'text-blue-500 hover:underline font-bold ',
            };
        }

        if(in_array($this->size, $this->allowedSize)){
            $classSize = match($this->size){
                'small' => 'h-7 rounded px-2',
                'middle' => 'h-9 rounded-md px-3',
                'large' => 'h-11 rounded-md px-8',
            };
        }else{
            throw new \Exception("The size '$this->size' is not allowed. The allowed sizes are: " . implode(', ', $this->allowedSize));
        }

        $this->class = "$classVariant $classSize $this->class";
    }

    public function render(): ViewContract|Closure|string
    {
        return View::make('shadblade::components.button.button');
    }
}
