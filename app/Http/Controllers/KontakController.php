<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan\PengaturanSitus;

class KontakController extends Controller
{
    public function index(){
        $title = "Kontak";
        $pengaturan = PengaturanSitus::first();
        return view('pages.kontak.index', compact('title', 'pengaturan'));
    }
}
