<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['username', 'password', 'phone', 'email', 'language', 'theme', 'device_id'];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
