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

        Users::create([
            "name" => "Dummy",
            "email" => "dummy1@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy2@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy3@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy4@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy5@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy6@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy7@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy8@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy9@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy10@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy11@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy12@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy13@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy14@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy15@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy16@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy17@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy18@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy19@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy20@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy21@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy22@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy23@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
        Users::create([
            "name" => "Dummy",
            "email" => "dummy24@gmail.com",
            "password" => Hash::make("dummy"),
            "role" => "user"
        ]);
    }
}
