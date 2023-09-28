<?php

namespace Modules\Admin\Facades;

use Illuminate\Support\Facades\Facade;

class Voyager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @method static string image($file, $default = '')
     * @method static $this useModel($name, $object)
     *
     * @see \Modules\Admin\Voyager
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'voyager';
    }
}
