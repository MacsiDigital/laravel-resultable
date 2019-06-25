<?php

namespace MacsiDigital\Resultable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Macsidigital\Resultable\Skeleton\SkeletonClass
 */
class Resultable extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'resultable';
    }
}
