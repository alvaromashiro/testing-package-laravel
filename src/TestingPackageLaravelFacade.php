<?php

namespace Alvaromashiro\TestingPackageLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alvaromashiro\TestingPackageLaravel\Skeleton\SkeletonClass
 */
class TestingPackageLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'testing-package-laravel';
    }
}
