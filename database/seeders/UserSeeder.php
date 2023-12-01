<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin"),
            "role" => "admin"
        ]);
        Users::create([
            "name" => "User",
            "email" => "user@gmail.com",
            "password" => Hash::make("user"),
            "role" => "user"
        ]);
    }
}
