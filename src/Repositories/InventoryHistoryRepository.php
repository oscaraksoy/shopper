<?php

namespace Shopper\Framework\Repositories;

use Shopper\Framework\Models\InventoryHistory;

class InventoryHistoryRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return InventoryHistory::class;
    }
}
