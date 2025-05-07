<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;

class BerandaDaftarGuru extends Model
{
    protected $table = 'beranda_daftar_guru';
    protected $fillable = ['nama', 'foto', 'nip', 'jabatan', 'urutan'];
}
