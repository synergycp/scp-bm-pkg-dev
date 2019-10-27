<?php

namespace _NAMESPACE_\_STUB_;

use App\Support\Http\FilterService;
use Illuminate\Database\Eloquent\Builder;

/**
 * Filter _STUB_s by those visible to the specific Request.
 */
class _STUB_FilterService
  extends FilterService {
  /**
   * @var _STUB_ListRequest
   */
  protected $request;
  protected $requestClass = _STUB_ListRequest::class;

  /**
   * @param Builder $query
   *
   * @return Builder
   */
  public function viewable(Builder $query): Builder {
    $this->permission->assertHas(_STUB_::PERMISSION_READ);
    return $query;
  }

  public function query(Builder $query) {
    $this->prepare()->apply($query);

    // Filter raw text search
    if ($searchText = $this->request->input('q')) {
      $query->search($this->search->search($searchText));
    }

    return $query;
  }
}
