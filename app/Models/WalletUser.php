<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'wallet',
        'user_id'
    ];

    function shops (){
        return $this->hasMany(Shop::class, 'wallet_users_id');
    }
}
