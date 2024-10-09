<?php

namespace App\Imports;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class UsersImport implements ToModel, WithHeadingRow, WithUpserts
{
    public $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        $names = $this->splitName($row['name']);
        $dob = Carbon::parse($row['date_of_birth'])->format('Y-m-d');
        $dofa = Carbon::parse($row['date_of_first_appointment'])->format('Y-m-d');
        $dopa = Carbon::parse($row['date_of_present_appointment'])->format('Y-m-d');
        $grade_level = isset($row['grade_level']) ? $row['grade_level'] : null;
        $grade_level_id = $this->data ? $this->data['grade_level_id'] : null;
        $step_id = $this->data ? $this->data['step_id'] : null;

        return new User([
            'pf_number' => $row['pf_number'],
            'first_name' => $names['first_name'],
            'middle_name' => $names['middle_name'],
            'surname' => $names['surname'],
            'gender' => $row['gender'],
            'dob' => $dob,
            'date_of_first_appointment' => $dofa,
            'date_of_present_appointment' => $dopa,
            'qualifications' => $row['qualifications'],
            'lga' => $row['lga'],
            'rank' => $row['rank'],
            'grade_level' => $grade_level,
            'grade_level_id' => $grade_level_id,
            'step_id' => $step_id,
            'cj' => $row['cj'],
            'psn' => $row['psn'],
            'cno' => $row['cno'],
        ]);
    }

    public function uniqueBy()
    {
        return 'pf_number';
    }

    private function splitName($fullName)
    {
        $nameParts = explode(' ', trim($fullName));
        $count = count($nameParts);

        if ($count == 1) {
            return [
                'first_name' => $nameParts[0],
                'middle_name' => '',
                'surname' => ''
            ];
        } elseif ($count == 2) {
            return [
                'first_name' => $nameParts[0],
                'middle_name' => '',
                'surname' => $nameParts[1]
            ];
        } else {
            return [
                'first_name' => $nameParts[0],
                'middle_name' => implode(' ', array_slice($nameParts, 1, -1)),
                'surname' => $nameParts[$count - 1]
            ];
        }
    }
}
