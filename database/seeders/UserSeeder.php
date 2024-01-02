<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nik" => "3529011908030004",
            "name" => "Muhammad Alief",
            "email" => "aliefmuhammad1908@gmail.com",
            "no_hp" => "085163676227",
            "password" => bcrypt(12345678),
            "foto_profile" => "NQYjRQEqLVXvx9x6faYLckFqgmeLCK3et85ByzOx.webp"
        ]);
    }
}
