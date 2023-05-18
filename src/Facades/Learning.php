<?php

namespace MrHarb\Learning\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MrHarb\Learning\Learning
 */
class Learning extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MrHarb\Learning\Learning::class;
    }
}
