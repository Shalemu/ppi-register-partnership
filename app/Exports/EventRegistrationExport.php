<?php

namespace App\Exports;

use App\Models\EventRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EventRegistrationExport implements FromCollection, WithHeadings
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function collection()
    {
        return EventRegistration::where('type', $this->type)
            ->select(
                'full_name',
                'phone',
                'email',
                'team_name',
                'school',
                'gender',
                'company_name',
                'created_at'
            )
            ->get();
    }

    public function headings(): array
    {
        return [
            'Full Name',
            'Phone',
            'Email',
            'Team Name',
            'School',
            'Gender',
            'Company Name',
            'Registered At'
        ];
    }
}
