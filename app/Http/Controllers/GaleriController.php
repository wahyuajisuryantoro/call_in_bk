<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri\GaleriFoto;
use App\Models\Pengaturan\PengaturanSitus;

class GaleriController extends Controller
{
    public function foto()
    {
        $title = 'Foto';
        $galeriFotos = GaleriFoto::orderBy('tanggal_upload', 'desc')->get();
        $pengaturan = PengaturanSitus::first();
        return view('pages.galeri.foto', compact('title', 'galeriFotos', 'pengaturan'));
    }
}