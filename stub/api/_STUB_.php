<?php

namespace _NAMESPACE_\_STUB_;

use App\Auth\Permission\Rule\AllowIfUserHasPermissions;
use App\Auth\Permission\THasPermissionChecks;
use App\Database\Models;

/**
 * Database storage and retrieval of _STUB_s.
 */
class _STUB_
  extends Models\Model {
  // Traits
  use _STUB_Search;
  use THasPermissionChecks;

  const PERMISSION_READ = '_ROUTE_.read';
  const PERMISSION_WRITE = '_ROUTE_.write';

  public static $singular = '_SINGULAR_';
  public static $plural = '_PLURAL_';
  public static $controller = '_ROUTEPREFIX__ROUTE_';

  protected $table = '_TABLE_';

  protected $casts = [];

  protected function permissionRulesForEdit(): array {
    return [
      new AllowIfUserHasPermissions([static::PERMISSION_WRITE]),
    ];
  }
}
