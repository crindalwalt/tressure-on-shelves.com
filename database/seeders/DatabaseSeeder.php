<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        // customer
        User::factory()->create([
            'name' => "User Khan",
            'role' => 1,
            'email' => "user1@sf.com",
            'password' => Hash::make("password"),
        ]);
        // admin
        User::factory()->create([
            'name' => "Admin Khan",
            'role' => 0,
            'email' => "admin@sf.com",
            'password' => Hash::make("password"),
        ]);
        $this->call([
            // ProductSeeder::class,
            CategorySeeder::class,
        ]);

    }
}
