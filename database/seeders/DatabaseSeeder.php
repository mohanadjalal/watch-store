<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Mohannad Jay',
            'email' => 'mohanad@jay.com',
            "username" => 'izzra',
            'password' => "12312312",
            'isAdmin' => true,

        ]);

        User::factory()->create([
            'name' => 'aysar gh',
            'email' => 'aysar@gh.com',
            "username" => 'gh123',
            'password' => "12312312",
            'isAdmin' => false,

        ]);


        User::factory(10)->create();


        Product::factory(10)->create();



    }
}