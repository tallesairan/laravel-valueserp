<?php

namespace Airan\LaravelValueserp\Providers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Airan\LaravelValueserp\Skeleton\SkeletonClass
 */
class LaravelValueserpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-valueserp';
    }
}
