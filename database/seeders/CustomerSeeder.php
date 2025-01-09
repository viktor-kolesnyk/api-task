<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Customer::create([
            'username' => 'domo00000',
            'password' => bcrypt('1'),
            'phone' => '000000000',
            'email' => 'test@test.ua',
            'language' => 'uk',
            'theme' => 'light',
            'device_id' => '',
        ]);

        $address1 = $user->addresses()->create([
            'address' => '34 кв. Академіка Ломоносова, 36',
            'status' => 'active',
            'tariff' => 'Unlim 1000',
            'balance' => 230,
        ]);

        $address2 = $user->addresses()->create([
            'address' => '25 кв. Богдана Хмельницького, 12',
            'status' => 'inactive',
            'tariff' => 'Unlim 1000',
            'balance' => -1,
        ]);

        $address1->services()->create([
            'internet' => 'Unlim 1000',
            'tv' => 'omega 60',
            'ip' => '10.10.10.10',
        ]);

        $address2->services()->create([
            'internet' => 'Unlim 1000',
            'tv' => 'omega 60',
            'ip' => '10.10.10.10',
        ]);
    }
}
