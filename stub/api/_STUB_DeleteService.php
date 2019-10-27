<?php

namespace _NAMESPACE_\_STUB_;

use App\Api\ApiAuthService;
use App\Support\Http\DeleteService;
use Illuminate\Support\Collection;

/**
 * Delete _STUB_s.
 */
class _STUB_DeleteService
  extends DeleteService {
  /**
   * @param Collection $items
   */
  protected function afterDelete(Collection $items) {
    $this->successItems('_TRANS_.deleted', $items);
  }

  /**
   * @param _STUB_ $item
   */
  protected function delete($item) {
    $this->checkCanDelete($item);
    $item->delete();
    $this->queue(new Events\_STUB_Deleted($item));
  }

  /**
   * @param _STUB_ $item
   */
  protected function checkCanDelete(_STUB_ $item) {
    $item->assertHasPermissionToDelete();
  }
}
