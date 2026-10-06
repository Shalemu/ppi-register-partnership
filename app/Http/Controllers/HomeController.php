<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = user();

        if (!$user) {
            return redirect()->route('landing_page');
        }

        if ($user->isAdmin()) {
            return redirect()->route('admin_panel.dashboard');
        }

        return view('landing_page.index');
    }

    public function landingPage()
    {
        return view('landing_page.index');
    }

    public function landingPageTwo()
    {
        return view('landing_page.landing_two');
    }
}