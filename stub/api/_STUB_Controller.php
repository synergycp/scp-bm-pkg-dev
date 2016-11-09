<?php

namespace _NAMESPACE_\_STUB_;

use App\Api;

/**
 * Handle HTTP requests regarding _STUB_s.
 */
class _STUB_Controller
extends Api\Controller
{
    use Api\Traits\ListResource;
    use Api\Traits\ShowResource;
    use Api\Traits\UpdateResource;
    use Api\Traits\CreateResource;
    use Api\Traits\DeleteResource;

    /**
     * @var _STUB_Repository
     */
    protected $items;

    /**
     * @var _STUB_FilterService
     */
    protected $filter;

    /**
     * @var _STUB_UpdateService
     */
    protected $update;

    /**
     * @var _STUB_DeleteService
     */
    protected $delete;

    /**
     * @var _STUB_Transformer
     */
    protected $transform;

    /**
     * @param _STUB_Repository    $items
     * @param _STUB_FilterService $filter
     * @param _STUB_UpdateService $update
     * @param _STUB_DeleteService $delete
     * @param _STUB_Transformer   $transform
     */
    public function boot(
        _STUB_Repository $items,
        _STUB_FilterService $filter,
        _STUB_UpdateService $update,
        _STUB_DeleteService $delete,
        _STUB_Transformer $transform
    ) {
        $this->items = $items;
        $this->filter = $filter;
        $this->update = $update;
        $this->delete = $delete;
        $this->transform = $transform;
    }

    /**
     * Filter the Repository by viewable entries.
     */
    public function filter()
    {
        $this->items->filter([$this->filter, 'viewable']);
    }
}
