<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Can',
            'role' => 'Admin',
            'email' => 'canbulgay@outlook.com',
            'company' => 'Sliconmade',
            'street_adress' => 'Adatepe Mahallesi 26 sokak no:14',
            'city' => 'Izmir',
            'country' => 'Türkiye',
            'zip' => '38400',
            'phone' => '5312665079',
            'password' => bcrypt('12345678'),
        ]);
       
        \App\Models\User::factory(10)->create();
    }
}
