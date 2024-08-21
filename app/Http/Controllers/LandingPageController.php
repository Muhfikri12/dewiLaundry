<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantages;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Galery;
use App\Models\Machines;
use App\Models\Service;
use App\Models\Team;
use App\Models\VisiMission;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.main', [
            'main' => 'home',
            'about' => About::first(),
            'service' => Service::all(),
            'gallery' => Galery::paginate(6),
            'teams' => Team::all(),
            'client' => Client::all(),
            'contact' => Contact::first(),

        ]);
    }

    public function about()
    {
        return view('landing_page.main', [
            'main' => 'about',
            'about' => About::first(),
            'advantages' => Advantages::all(),
            'visiMission' => VisiMission::first(),
            'client' => Client::all(),
            'contact' => Contact::first(),
            'service' => Service::all(),

        ]);
    }

    public function service()
    {
        return view('landing_page.main', [
            'main' => 'service',
            'machine' => Machines::paginate(6),
            'service' => Service::all(),
            'whyUs' => WhyUs::first(),
            'contact' => Contact::first(),
            'about' => About::first(),
        ]);
    }

    public function contact()
    {
        return view('landing_page.main', [
            'main' => 'contact',
            'contact' => Contact::first(),
            'service' => Service::all(),
            'about' => About::first(),
        ]);
    }
}
