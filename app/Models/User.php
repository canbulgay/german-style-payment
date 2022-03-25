<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'company',
        'street_adress',
        'city',
        'country',
        'zip',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'role'
    ];
    
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class,'invoice_user');
    }

    public function checks()
    {
        return $this->belongsToMany(Check::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
}
