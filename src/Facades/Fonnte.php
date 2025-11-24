<?php

namespace Fonnte\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Fonnte extends Facade
{
     /**
     * Get the registered name of the component.
     *
     * @return string
     */
     protected static function getFacadeAccessor()
     {
          return 'fonnte';
     }
}
