<?php

namespace _NAMESPACE_\_STUB_;

use Illuminate\Support\Collection;
use App\Support\Http\UpdateService;

class _STUB_UpdateService extends UpdateService
{
    /**
     * @var _STUB_FormRequest
     */
    protected $request;
    protected $requestClass = _STUB_FormRequest::class;

    public function afterCreate(Collection $items)
    {
        $createEvent = $this->queueHandler(
            Events\_STUB_Created::class
        );

        $this->successItems(
            '_TRANS_.created',
            $items->each($createEvent)
        );
    }

    protected function updateAll(Collection $items)
    {
    }
}
