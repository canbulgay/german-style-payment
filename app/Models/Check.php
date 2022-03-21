<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_url',
        'qr_photo'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function items()
    {
        return $this->hasManyThrough(ItemOrder::class,Order::class,'check_id','order_id','id','id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
