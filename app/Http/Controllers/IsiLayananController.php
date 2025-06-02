<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda\IsiLayanan;
use App\Models\Beranda\BerandaLayanan;
use App\Models\Pengaturan\PengaturanSitus;

class IsiLayananController extends Controller
{
    public function index($id)
{
    $layanan = BerandaLayanan::findOrFail($id);
    $isi = IsiLayanan::where('layanan_id', $id)->orderBy('urutan', 'asc')->get();
    $pengaturan = PengaturanSitus::first();
    $title = $layanan->nama_layanan;
    
    return view('pages.layanan.index', compact('title', 'layanan', 'isi', 'pengaturan'));
}
}
