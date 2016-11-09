<?php

namespace _NAMESPACE_\_STUB_;

use App\Log\LogTypeService;
use App\Support\ServiceProvider;

/**
 * Provide the _STUB_ feature to the Application.
 */
class _STUB_ServiceProvider
extends ServiceProvider
{
    /**
     * @var array
     */
    protected $providers = [
        _STUB_EventServiceProvider::class,
        _STUB_RoutesProvider::class,
    ];

    /**
     * @param LogTypeService $logType
     */
    public function boot(LogTypeService $logType)
    {
        $logType->map('_ROUTE_', _STUB_::class);
    }
}
