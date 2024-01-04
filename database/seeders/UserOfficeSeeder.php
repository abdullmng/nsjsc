<?php

namespace Database\Seeders;

use App\Models\UserOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_offices = [
            [
                'user_id' => 1,
                'office_id' => 1,
            ],
            [
                'user_id' => 2,
                'office_id' => 2,
            ]
        ];
        UserOffice::insert($user_offices);
    }
}
