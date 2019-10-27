<?php

namespace _NAMESPACE_\_STUB_;

use App\Support\Http\UpdateService;
use Illuminate\Support\Collection;

class _STUB_UpdateService
  extends UpdateService {
  /**
   * @var _STUB_FormRequest
   */
  protected $request;
  protected $requestClass = _STUB_FormRequest::class;

  public function afterCreate(Collection $items) {
    $createEvent = $this->queueHandler(Events\_STUB_Created::class);

    $this->successItems('_TRANS_.created', $items->each($createEvent));
  }

  protected function beforeAll(Collection $items) {
    $items->each(function (_STUB_ $item) {
      $item->assertHasPermissionToEdit();
    });
  }

  protected function updateAll(Collection $items) {
  }
}
