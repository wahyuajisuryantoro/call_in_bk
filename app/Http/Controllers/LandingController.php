<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda\BerandaHero;
use App\Models\Beranda\BerandaKoordinator;

class LandingController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $hero = BerandaHero::first();
        $koordinator = BerandaKoordinator::first();
        return view('pages.landing.index', compact('title', 'hero', 'koordinator'));
    }
}
