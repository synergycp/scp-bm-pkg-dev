<?php

namespace _NAMESPACE_\_STUB_;

use Illuminate\Support\Collection;
use App\Support\Http\DeleteService;
use App\Api\ApiAuthService;

/**
 * Delete _STUB_s.
 */
class _STUB_DeleteService
extends DeleteService
{
    /**
     * @var ApiAuthService
     */
    protected $auth;

    /**
     * @param ApiAuthService $auth
     */
    public function boot(
        ApiAuthService $auth
    ) {
        $this->auth = $auth;
    }

    /**
     * @param Collection $items
     */
    protected function afterDelete(Collection $items)
    {
        $this->successItems('_TRANS_.deleted', $items);
    }

    /**
     * @param _STUB_ $item
     */
    protected function delete($item)
    {
        $this->checkCanDelete($item);
        $item->delete();
        $this->queue(new Events\_STUB_Deleted($item));
    }

    /**
     * @param _STUB_ $item
     */
    protected function checkCanDelete(_STUB_ $item)
    {
        if ($this->auth->is('admin')) {
        }
    }
}
