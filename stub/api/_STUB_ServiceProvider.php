<?php

namespace _NAMESPACE_\_STUB_;

use App\Support\ClassMap;
use App\Support\ServiceProvider;

/**
 * Provide the _STUB_ feature to the Application.
 */
class _STUB_ServiceProvider
  extends ServiceProvider {
  /**
   * @var array
   */
  protected $providers = [_STUB_EventServiceProvider::class,
    _STUB_RoutesProvider::class,];

  /**
   * @param ClassMap $classMap
   */
  public function boot(ClassMap $classMap) {
    $classMap->map('_ROUTE_', _STUB_::class);
  }
}
