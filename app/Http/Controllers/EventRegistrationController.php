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
    // This form does not post a type from the UI, so we assign a default
    // to satisfy the NOT NULL `type` column in event_registrations.
    $data = $request->validate([
        'type' => 'nullable|string',
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

    $data['type'] = $request->input('type', 'membership');
    $data['agreement'] = $request->boolean('agreement');

    // Map the simplified membership form fields to the event_registrations schema.
    $data['full_name'] = $request->input('child_full_name');
    $data['phone'] = $request->input('parent_phone');
    $data['email'] = $request->input('parent_email');
    $data['gender'] = $request->input('gender');
    $data['dob'] = $request->input('dob');
    $data['school'] = $request->input('school');
    $data['motivation'] = $request->input('aspiration');
    $data['experience'] = $request->input('talent');
    $data['organization'] = $request->input('relationship');
    $data['message'] = $request->input('consent');
    $data['parental_consent'] = $request->input('consent');

    if ($request->has('interests')) {
        $data['support_type'] = json_encode($request->input('interests', []));
    }

    EventRegistration::create($data);

    return back()->with('success', 'Usajili umefanikiwa!');
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
