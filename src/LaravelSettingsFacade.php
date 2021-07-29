<?php

namespace Nanopkg\LaravelSettings;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nanopkg\LaravelSettings\LaravelSettings
 */
class LaravelSettingsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-settings';
    }
}
