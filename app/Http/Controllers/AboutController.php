<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Tentang Kami';
        return view('pages.about.index', compact('title'));
    }
}
