<?php

namespace Packages\Dev\App\Scaffold;

use App\Support\ServiceProvider;

class ScaffoldCommandProvider
extends ServiceProvider
{
    protected $commands = [
        Api\ApiCommand::class,
    ];

    public function boot()
    {
        $this->commands($this->commands);
    }
}
