<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany(Item::class,'item_order')->using(ItemOrder::class)->withPivot('quentity','rate','amount');
    }

    public function check()
    {
        return $this->belongsTo(Check::class);
    }
}
