<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = [
            [
                "name" => "Director's Office",
                "address" => "FHIS"
            ],
            [
                "name" => "ICT",
                "address" => "FHIS"
            ]
            ];
        Office::insert($offices);
    }
}
