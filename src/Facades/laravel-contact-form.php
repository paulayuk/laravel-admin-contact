<?php

namespace paulayuk\laravel-contact-form\Facades;

use Illuminate\Support\Facades\Facade;

class laravel-contact-form extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-contact-form';
    }
}
