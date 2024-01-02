<?php

namespace Database\Seeders;

use App\Models\Absen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absen::create([
            "user_id" => 1,
            "uuid" => uniqid(),
            "record" => date('2023-09-04'),
            "time" => date('08:10:00'),
            "status" => "hadir"
        ]);
        Absen::create([
            "user_id" => 1,
            "uuid" => uniqid(),
            "record" => date('2023-09-05'),
            "time" => date('08:00:00'),
            "status" => "hadir"
        ]);
        Absen::create([
            "user_id" => 1,
            "uuid" => uniqid(),
            "record" => date('2023-09-06'),
            "time" => date('08:00:00'),
            "status" => "hadir"
        ]);
        Absen::create([
            "user_id" => 1,
            "uuid" => uniqid(),
            "record" => date('2023-09-07'),
            "time" => date('08:30:00'),
            "status" => "hadir"
        ]);
    }
}
