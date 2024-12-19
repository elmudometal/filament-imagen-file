<?php

namespace ElmudoDev\FilamentImagenFile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ElmudoDev\FilamentImagenFile\FilamentImagenFile
 */
class FilamentImagenFile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ElmudoDev\FilamentImagenFile\FilamentImagenFile::class;
    }
}
