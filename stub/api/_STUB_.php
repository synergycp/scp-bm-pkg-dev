<?php

namespace _NAMESPACE_\_STUB_;

use App\Database\Models;
use Illuminate\Database\Eloquent\Builder;

/**
 * Database storage and retrieval of _STUB_s.
 */
class _STUB_
extends Models\Model
{
    // Traits
    use _STUB_Search;

    public static $singular = '_SINGULAR_';
    public static $plural = '_PLURAL_';
    public static $controller = '_ROUTEPREFIX__ROUTE_';

    protected $table = '_TABLE_';

    protected $casts = [
    ];
}
