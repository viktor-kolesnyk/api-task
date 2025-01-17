<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $customer = Customer::create([
                'username' => 'user' . $i,
                'password' => bcrypt('password' . $i),
                'phone' => '123456789' . $i,
                'email' => 'user' . $i . '@example.com',
                'language' => 'uk',
                'theme' => 'light',
                'device_id' => 'device_' . $i,
            ]);

            for ($j = 1; $j <= 2; $j++) {
                $address = Address::create([
                    'customer_id' => $customer->id,
                    'address' => 'Street ' . $j . ', City ' . $i,
                    'status' => $j % 2 == 0 ? 'active' : 'inactive',
                    'tariff' => 'Unlim 1000',
                    'balance' => rand(-100, 500),
                ]);

                Service::create([
                    'address_id' => $address->id,
                    'internet' => 'Unlim 1000',
                    'tv' => 'Omega ' . rand(50, 100),
                    'ip' => '192.168.1.' . rand(1, 255),
                ]);
            }
        }
    }
}
