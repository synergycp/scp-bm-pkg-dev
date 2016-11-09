<?php

namespace _NAMESPACE_\_STUB_\Events;

use App\Log\Log;

class _STUB_Created extends _STUB_LoggableEvent
{
    public function log(Log $log)
    {
        $log->setDesc('_SINGULAR_ created')
            ->setTarget($this->target)
            ->save()
            ;
    }
}
