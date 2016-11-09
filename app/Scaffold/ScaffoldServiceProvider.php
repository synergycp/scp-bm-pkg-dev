<?php

namespace Packages\Dev\App\Scaffold;

use App\Support\ServiceProvider;

class ScaffoldServiceProvider
extends ServiceProvider
{
    protected $providers = [
        ScaffoldCommandProvider::class,
    ];
}
