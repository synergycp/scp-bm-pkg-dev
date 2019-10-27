<?php

namespace _NAMESPACE_\_STUB_\Events;

use _NAMESPACE_\_STUB_;
use App\Support\Database\SerializesModels;
use App\Support\Event;

/**
 * Base _STUB_ Event.
 */
abstract class _STUB_Event
  extends Event {
  use SerializesModels;

  /**
   * @var _STUB_\_STUB_
   */
  public $target;

  /**
   * Create a new event instance.
   *
   * @param _STUB_\_STUB_ $target
   */
  public function __construct(_STUB_\_STUB_ $target) {
    $this->target = $target;
  }

  /**
   * Get the channels the event should be broadcast on.
   *
   * @return array
   */
  public function broadcastOn() {
    return [];
  }
}
