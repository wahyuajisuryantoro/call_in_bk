<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang\TentangKonten;
use App\Models\Pengaturan\PengaturanSitus;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'Tentang Kami';
         $pengaturan = PengaturanSitus::first();
        $tentangKontent = TentangKonten::first();
        return view('pages.about.index', compact('title', 'pengaturan','tentangKontent'));
    }
}
