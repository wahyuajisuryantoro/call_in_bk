<?php

namespace App\Models\Tentang;

use Illuminate\Database\Eloquent\Model;

class TentangKonten extends Model
{
    protected $table = 'tentang_konten';
    protected $fillable = ['judul', 'isi', 'gambar1', 'gambar2'];
}
