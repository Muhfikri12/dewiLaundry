<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.main', [
            'main' => 'home',
            'about' => About::first()
        ]);
    }

    public function about()
    {
        return view('landing_page.main', [
            'main' => 'about',
            'about' => About::first()
        ]);
    }

    public function service()
    {
        return view('landing_page.main', [
            'main' => 'service'
        ]);
    }

    public function contact()
    {
        return view('landing_page.main', [
            'main' => 'contact'
        ]);
    }
}
