<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Produk::factory()->count(10)->create();
        // Produk::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        User::create(([
            "name"=> "Akasshy",
            "email"=> "akasshy@gmail.com",
            "password"=> bcrypt("123"),
            "role" => "admin"
        ]));
        User::create(([
            "name"=> "Akasshy",
            "email"=> "user@gmail.com",
            "password"=> bcrypt("123"),
            "role" => "user"
        ]));
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
