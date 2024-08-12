<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('landing_page.about');
    }
}
