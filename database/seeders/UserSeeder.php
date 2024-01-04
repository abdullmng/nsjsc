<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "pf_number" => "pf/10001",
                "first_name" => "Abdullahi",
                "middle_name" => "Abdullahi",
                "surname" => "Muhammad",
                "phone_number" => "08161626675",
                "address" => "Minna",
                "email" => "abdullmng@gmail.com",
                "office_id" => 1,
                "rank" => "director",
                "password" => Hash::make("12345"),
            ],
            [
                "pf_number" => "pf/10007",
                "first_name" => "Adamu",
                "middle_name" => null,
                "surname" => "Abubakar",
                "phone_number" => "08039523337",
                "address" => "Minna",
                "email" => "inoniceagain@gmail.com",
                "office_id" => 2,
                "rank" => "unit head",
                "password" => Hash::make("12345"),
            ]
        ];
        User::insert($users);
    }
}
