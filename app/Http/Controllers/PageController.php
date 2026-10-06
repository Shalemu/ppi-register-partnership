<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
      public function about()
    {
        return view('landing_page.pages.about');
    }
      public function program()
    {
        return view('landing_page.pages.program');
    }
      public function media()
    {
        return view('landing_page.pages.media');
    }
}
