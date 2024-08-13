<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.main', [
            'main' => 'home',
        ]);
    }

    public function about()
    {
        return view('landing_page.main', [
            'main' => 'about'
        ]);
    }

    public function service()
    {
        return view('landing_page.main', [
            'main' => 'service'
        ]);
    }
}
