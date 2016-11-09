<?php

namespace Packages\Dev\App\Scaffold\Api;

use App\Console\Commands\Command;

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
        $path = "app/Auth/Verify";
        $this->service->create($path, [
            ApiVariable::NAME => 'Method',
            ApiVariable::NAMESPACE => 'App\\Auth\\Verify',
            ApiVariable::TRANSLATE => 'auth.verify.method',
            ApiVariable::ROUTE => 'auth.verify.method',
            ApiVariable::TABLE => 'auth_verify_methods',
            ApiVariable::SINGULAR => 'Two Factor Authentication Method',
            ApiVariable::PLURAL => 'Two Factor Authentication Methods',
            ApiVariable::ROUTE_PREFIX => '',
        ]);
    }
}
