<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang\TentangKonten;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Tentang Kami';
        $tentangKontent = TentangKonten::first();
        return view('pages.about.index', compact('title', 'tentangKontent'));
    }
}
