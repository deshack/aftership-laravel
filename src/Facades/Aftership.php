<?php

namespace Gtapps\AfterShipLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Aftership extends Facade {

    protected static function getFacadeAccessor() {
        return "aftership-laravel";
    }

}
