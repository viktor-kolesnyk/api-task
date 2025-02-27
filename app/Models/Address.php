<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'address', 'status', 'tariff', 'balance'];

    public function services()
    {
        return $this->hasOne(Service::class);
    }
}
