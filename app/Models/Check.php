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
}
