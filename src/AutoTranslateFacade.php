<?php

namespace Flemzord\AutoTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flemzord\AutoTranslate\Skeleton\SkeletonClass
 */
class AutoTranslateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auto-translate';
    }
}
