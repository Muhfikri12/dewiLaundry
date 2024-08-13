<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.components.main', [
            'main' => 'home',
        ]);
    }

    public function about()
    {
        return view('landing_page.components.main', [
            'main' => 'about'
        ]);
    }
}
