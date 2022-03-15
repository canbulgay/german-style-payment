<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class,'item_order')->withPivot('quentity','rate','amount');
    }
}
