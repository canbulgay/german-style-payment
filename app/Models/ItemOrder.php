<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemOrder extends Pivot
{
    public function getNameAttribute()
    {
        $itemId = $this->item_id;
        $item = Item::find($itemId);
        $itemName = $item->name;

        return $itemName;
    }
    public function getTotalAttribute()
    {
        $total = $this->quentity * $this->rate;
        return $total;
    }
}
