<?php

namespace Castro\Shadblade;

use Illuminate\Support\ServiceProvider;
use Castro\Shadblade\Components\Card\Card;
use Castro\Shadblade\Components\Card\Header;
use Castro\Shadblade\Components\Card\Title;
use Castro\Shadblade\Components\Card\Content;
use Castro\Shadblade\Components\Card\Description;
use Castro\Shadblade\Components\Card\Footer;
use Castro\Shadblade\Components\Button\Button;
use Castro\Shadblade\Components\Input\Input;
use Castro\Shadblade\Components\Label\Label;

class ShadbladeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'shadblade');
        $this->loadViewComponentsAs('shadblade', [
            'card' => Card::class,
            'card-header' => Header::class,
            'card-title' => Title::class,
            'card-content' => Content::class,
            'card-description' => Description::class,
            'card-footer' => Footer::class,

            'input' => Input::class,

            'label' => Label::class,

            'button' => Button::class,
        ]);
    }

    public function boot()
    {
        
    }
}
