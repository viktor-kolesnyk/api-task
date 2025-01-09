<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'username' => $this->username,
            'password' => $this->password,
            'phone' => $this->phone,
            'email' => $this->email,
            'language' => $this->language,
            'theme' => $this->theme,
            'deviceId' => $this->device_id,
            'addresses' => $this->addresses->map(function ($address) {
                return [
                    'address' => $address->address,
                    'status' => $address->status,
                    'tariff' => $address->tariff,
                    'balance' => $address->balance,
                    'services' => [
                        'internet' => $address->services->internet,
                        'tv' => $address->services->tv,
                        'ip' => $address->services->ip,
                    ],
                ];
            }),
        ];
    }
}
