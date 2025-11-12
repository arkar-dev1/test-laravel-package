<?php

namespace Cubepasses\Axess\Facades;

use Illuminate\Support\Facades\Facade;

class Axess extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'axess';
    }
}
