<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class UsersForPromotion implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    protected $gradeLevelId;

    public function __construct($request)
    {
        $this->gradeLevelId = $request->grade_level ?? null;
    }

    public function query()
    {
        return User::query()
            ->join('grade_levels', 'users.grade_level_id', '=', 'grade_levels.id')
            ->whereNotNull('users.date_of_present_appointment')
            ->whereRaw('DATEDIFF(NOW(), users.date_of_present_appointment) / 365 >= grade_levels.years_to_promote')
            ->when($this->gradeLevelId, function (Builder $query) {
                return $query->where('users.grade_level_id', $this->gradeLevelId);
            })
            ->select(
                'users.pf_number',
                'users.first_name',
                'users.surname',
                'grade_levels.name as current_grade_level',
                'users.date_of_first_appointment',
                'users.date_of_present_appointment',
                'users.rank',
                'users.qualifications',
                'users.cj',
                'grade_levels.years_to_promote'
            );
    }

    public function map($user): array
    {
        $yearsInCurrentGrade = Carbon::parse($user->date_of_present_appointment)->diffInYears(now());

        return [
            $user->pf_number,
            $user->first_name,
            $user->surname,
            $user->current_grade_level,
            $user->date_of_first_appointment,
            $user->date_of_present_appointment,
            $user->rank,
            $user->qualifications,
            $user->cj,
            $user->years_to_promote,
            $yearsInCurrentGrade,
        ];
    }

    public function headings(): array
    {
        return [
            'PF Number',
            'First Name',
            'Surname',
            'Current Grade Level',
            'Date of First Appointment',
            'Date of Present Appointment',
            'Rank',
            'Qualifications',
            'CJ',
            'Years Required for Promotion',
            'Years in Current Grade',
        ];
    }
}
