<?php

namespace Irsyadulibad\LaravelActivehelper;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ActiveHelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        // 
    }

    public function boot()
    {
        Blade::directive('active', function($params) {
            return "<?= Irsyadulibad\LaravelActivehelper\ActiveHelper::echo($params) ?>";
        });
    }
}
