<?php

namespace App\Models\Pesan;

use Illuminate\Database\Eloquent\Model;

class PesanSiswa extends Model
{
    protected $table = 'pesan_siswa';
    protected $fillable = ['nama', 'email', 'judul', 'isi'];
}
