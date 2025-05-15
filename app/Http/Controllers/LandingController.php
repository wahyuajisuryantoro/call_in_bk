<?php

namespace App\Http\Controllers;

use App\Mail\PesanSiswaMail;
use Illuminate\Http\Request;
use App\Models\Pesan\PesanSiswa;
use App\Models\Beranda\BerandaHero;
use App\Models\Beranda\BerandaMisi;
use App\Models\Beranda\BerandaVisi;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Beranda\BerandaTujuan;
use App\Models\Tentang\TentangKonten;
use App\Models\Beranda\BerandaDaftarGuru;
use App\Models\Beranda\BerandaKoordinator;
use App\Models\Pengaturan\PengaturanSitus;

class LandingController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $pengaturan = PengaturanSitus::first();
        $hero = BerandaHero::first();
        $koordinator = BerandaKoordinator::first();
        $visi = BerandaVisi::first();
        $misi = BerandaMisi::orderBy('urutan', 'asc')->get();
        $tujuan = BerandaTujuan::orderBy('urutan', 'asc')->get();
        $daftarGuru = BerandaDaftarGuru::orderBy('urutan', 'asc')->get();

        return view('pages.landing.index', compact(
            'title',
            'pengaturan',
            'hero',
            'koordinator',
            'visi',
            'misi',
            'tujuan',
            'daftarGuru'
        ));
    }

   public function storePesan(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $pesan = PesanSiswa::create([
                'nama' => $request->name,
                'email' => $request->email,
                'judul' => $request->subject,
                'isi' => $request->message,
            ]);

            $pengaturan = PengaturanSitus::first();

            $this->sendPesanEmail($pesan, $pengaturan);
            
            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {         
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan: ' . $e->getMessage());
        }
    }

    protected function sendPesanEmail($pesan, $pengaturan)
    {
        if (!$pengaturan || !$pengaturan->email) {
            Log::warning('Email tujuan tidak ditemukan di pengaturan situs');
            throw new \Exception('Email tujuan tidak ditemukan di pengaturan situs');
        }
        try {      
            Mail::raw('Terdapat pesan baru dari ' . $pesan->nama . ' (' . $pesan->email . '). Judul: ' . $pesan->judul, function ($message) use ($pengaturan, $pesan) {
                $message->to($pengaturan->email)
                        ->subject('Pesan Baru (Plain): ' . $pesan->judul);
            });
            Mail::to($pengaturan->email)
                ->send(new PesanSiswaMail($pesan, $pengaturan));
        } catch (\Exception $e) {
            Log::error('Gagal mengirim email: ' . $e->getMessage());
            throw $e;
        }
    }
}