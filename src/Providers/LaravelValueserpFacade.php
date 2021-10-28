<?php

namespace WDevs\LaravelValueserp\Providers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WDevs\LaravelValueserp\Skeleton\SkeletonClass
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
