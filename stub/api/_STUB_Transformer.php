<?php

namespace _NAMESPACE_\_STUB_;

use App\Api\Transformer;

class _STUB_Transformer
extends Transformer
{
    /**
     * @param _STUB_ $item
     *
     * @return array
     */
    public function item(_STUB_ $item)
    {
        return $item->expose([
            'id',
            'name',
        ]) + [
        ];
    }

    /**
     * @param _STUB_ $item
     *
     * @return array
     */
    public function resource(_STUB_ $item)
    {
        return $this->item($item) + [
        ];
    }
}
