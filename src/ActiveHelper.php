<?php

namespace Irsyadulibad\LaravelActivehelper;

use Illuminate\Support\Facades\Route;

class ActiveHelper
{
    public static function echo(string $params, string $value = 'active'): string
    {
        $route = Route::current()->getName();
        $params = explode(',', str_replace("'", '', $params));
        $match = array_filter($params, function($param) use($route) {
            return preg_match("/$param/", $route);
        });

        return (count($match) > 0) ? $value : '';
    }
}
