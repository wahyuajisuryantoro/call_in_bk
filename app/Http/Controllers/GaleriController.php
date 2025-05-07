<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function foto()
    {
        $title = 'Foto';
        return view('pages.galeri.foto', compact('title'));
    }
}
