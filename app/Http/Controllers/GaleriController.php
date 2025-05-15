<?php

namespace App\Http\Controllers;

use App\Models\Galeri\GaleriFoto;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function foto()
    {
        $title = 'Foto';
        $galeriFotos = GaleriFoto::orderBy('tanggal_upload', 'desc')->get();
        return view('pages.galeri.foto', compact('title', 'galeriFotos'));
    }
}