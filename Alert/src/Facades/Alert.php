<?php

namespace Saicoder\Alert\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'alert';
    }
}
