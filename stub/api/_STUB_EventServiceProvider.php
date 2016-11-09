<?php

namespace _NAMESPACE_\_STUB_;

use App\Log\EventLogger;
use App\Support\EventServiceProvider;

/**
 * Setup _PLURAL_ Event Listeners.
 */
class _STUB_EventServiceProvider
extends EventServiceProvider
{
    protected $listen = [
        Events\_STUB_Created::class => [
            EventLogger::class,
        ],
        Events\_STUB_Deleted::class => [
            EventLogger::class,
        ],
    ];
}
