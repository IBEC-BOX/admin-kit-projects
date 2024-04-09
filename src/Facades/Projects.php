<?php

namespace AdminKit\Projects\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Projects\Projects
 */
class Projects extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Projects\Projects::class;
    }
}
