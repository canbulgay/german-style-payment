<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use App\Models\Wallet;
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
       
        \App\Models\User::factory(19)->create();
        for ($i=1; $i <7 ; $i++) { 
            \App\Models\Check::create();
        }

        for ($i=0; $i < 40 ; $i++) { 
            \App\Models\Order::factory()
            ->hasAttached(Item::factory()->count(3), ['quentity' => rand(1,5) , 'rate' => rand(45,145)])
            ->create([
                'check_id' =>  \App\Models\Check::inRandomOrder()->pluck('id')->first(),
            ]);
        }

        foreach (User::all() as $user) {
            Wallet::create([
                'user_id' => $user->id,
                'amount' => rand(2000,7000),
            ]);
        }   



    }
}
