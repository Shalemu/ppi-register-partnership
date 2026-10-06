<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventRegistration;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EventRegistrationExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\View;

class EventRegistrationController extends Controller
{

public function index()
    {
        $teams = EventRegistration::where('type', 'team')->latest()->get();

        $volunteers = EventRegistration::where('type', 'volunteer')->latest()->get();

        $mentors = EventRegistration::where('type', 'mentor')->latest()->get();

        $sponsors = EventRegistration::where('type', 'sponsor')->latest()->get();

        return view('dashboard.admin.dashboard', [
            'teamCount' => $teams->count(),
            'volunteerCount' => $volunteers->count(),
            'mentorCount' => $mentors->count(),
            'sponsorCount' => $sponsors->count(),

            'teams' => $teams,
            'volunteers' => $volunteers,
            'mentors' => $mentors,
            'sponsors' => $sponsors,
        ]);
    }


   public function store(Request $request)
{
    $type = $request->input('type');

    // For the simplified PPI membership form, accept these fields and validate
    $data = $request->validate([
        'child_full_name' => 'required|string',
        'dob' => 'nullable|date',
        'age' => 'nullable|integer',
        'gender' => 'nullable|string',
        'school' => 'nullable|string',
        'class' => 'nullable|string',
        'location' => 'nullable|string',
        'interests' => 'nullable|array',
        'interests.*' => 'string',
        'talent' => 'nullable|string',
        'aspiration' => 'nullable|string',
        'parent_full_name' => 'required|string',
        'relationship' => 'nullable|string',
        'parent_phone' => 'required|string',
        'parent_email' => 'nullable|email',
        'consent' => 'nullable',
        'agreement' => 'required',
        'emergency_name' => 'nullable|string',
        'emergency_phone' => 'nullable|string',
    ]);

   
    $data['agreement'] = $request->boolean('agreement');

        // convert arrays
    if (isset($data['support_type'])) {
        $data['support_type'] = json_encode($data['support_type']);
    }

    if (isset($data['volunteer_roles'])) {
        $data['volunteer_roles'] = json_encode($data['volunteer_roles']);
    }

    EventRegistration::create($data);

    return back()->with('success', 'Registration submitted successfully!');
}


public function exportExcel($type)
{
    return Excel::download(
        new EventRegistrationExport($type),
        $type . '-registrations.xlsx'
    );
}

public function exportPDF($type)
{
    $data = EventRegistration::where('type', $type)->latest()->get();

    $pdf = Pdf::loadView('exports.registrations', [
        'data' => $data,
        'type' => $type
    ]);

    return $pdf->download($type . '-registrations.pdf');
}

public function instructionsPdf(Request $request)
{
    $lang = $request->get('lang', 'en');

    $view = $lang === 'sw' ? 'event_registration.instructions_sw' : 'event_registration.instructions_en';

    if (! View::exists($view)) {
        $view = 'event_registration.instructions_en';
    }

    $pdf = Pdf::loadView($view);

    return $pdf->download('ppi-instructions-' . $lang . '.pdf');
}

}
