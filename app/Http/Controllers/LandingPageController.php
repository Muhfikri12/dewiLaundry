<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantages;
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
            'advantages' => Advantages::all()
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
