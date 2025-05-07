<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;

class BerandaHero extends Model
{
    protected $table = 'beranda_hero';
    protected $fillable = ['judul', 'subjudul', 'gambar1', 'gambar2', 'kutipan', 'penulis_kutipan'];
}
