<?php

namespace CodeWithDennis\SimpleMap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodeWithDennis\SimpleMap\SimpleMap
 */
class SimpleMap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodeWithDennis\SimpleMap\SimpleMap::class;
    }
}
