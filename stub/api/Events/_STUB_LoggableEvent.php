<?php

namespace _NAMESPACE_\_STUB_\Events;

use App\Log;

/**
 * Base _STUB_ Loggable Event.
 */
abstract class _STUB_LoggableEvent
  extends _STUB_Event
  implements Log\LoggableEvent {
  abstract public function log(Log\Log $log);
}
