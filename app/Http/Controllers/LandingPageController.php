<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantages;
use App\Models\Galery;
use App\Models\Machines;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.main', [
            'main' => 'home',
            'about' => About::first(),
            'service' => Service::all(),
            'gallery' => Galery::paginate(6)

        ]);
    }

    public function about()
    {
        return view('landing_page.main', [
            'main' => 'about',
            'about' => About::first(),
            'advantages' => Advantages::all()
        ]);
    }

    public function service()
    {
        return view('landing_page.main', [
            'main' => 'service',
            'machine' => Machines::paginate(6),
            'service' => Service::all(),
        ]);
    }

    public function contact()
    {
        return view('landing_page.main', [
            'main' => 'contact'
        ]);
    }
}
