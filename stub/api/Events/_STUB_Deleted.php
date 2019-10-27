<?php

namespace _NAMESPACE_\_STUB_\Events;

use App\Log\Log;

class _STUB_Deleted
  extends _STUB_LoggableEvent {
  protected $allowSoftDeletes = true;

  public function log(Log $log) {
    $log->setDesc('_SINGULAR_ deleted')->setTarget($this->target)->save();
  }
}
