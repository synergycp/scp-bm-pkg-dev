<?php

namespace Packages\Dev\App\Scaffold\Api;

use App\Console\Commands\Command;
use Packages\Dev\App\Scaffold\Api\ApiVariable as V;

class ApiCommand
extends Command
{
    /**
     * @var string
     */
    protected $name = 'pkg:dev:scaffold:api';

    /**
     * @var string
     */
    protected $description = 'Create the scaffolding for a REST API Endpoint.';

    /**
     * @var ApiService
     */
    protected $service;

    /**
     * @param ApiService $service
     */
    public function __construct(ApiService $service)
    {
        $this->service = $service;

        parent::__construct();
    }

    /**
     * Run the Command.
     */
    public function handle()
    {
        $path = $this->ask('Parent Path', 'app');
        $parentNamespace = $this->ask('Parent Namespace', $this->toNamespace($path));
        $directory = $this->ask('New Directory');
        $fullPath = $path.DIRECTORY_SEPARATOR.$directory;
        $appPath = starts_with($fullPath, 'app/') ? substr($fullPath, 4) : $fullPath;
        $dottedPath = collect(explode(DIRECTORY_SEPARATOR, $appPath))
            ->map('str_slug')
            ->implode('.')
        ;

        $this->service->create($path, [
            V::NAME => $directory,
            V::NAMESPACE => $parentNamespace,
            V::TRANSLATE => $dottedPath,
            V::ROUTE => $dottedPath,
            V::TABLE => str_plural(str_replace('.', '_', $dottedPath)),
            V::SINGULAR => $singular = $this->ask('Singular', $directory),
            V::PLURAL => $this->ask('Plural', str_plural($singular)),
            //V::ROUTE_PREFIX => $this->ask('Route Prefix', false),
        ]);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function toNamespace($path)
    {
        return collect(explode(DIRECTORY_SEPARATOR, $path))
            ->map(function ($dir) {
                return ucwords($dir);
            })
            ->implode('\\')
        ;

    }
}
