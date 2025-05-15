<?php

namespace App\Models\Tentang;

use Illuminate\Database\Eloquent\Model;

class TentangKonten extends Model
{
    protected $table = 'tentang_kontent';
    protected $fillable = ['judul', 'isi', 'gambar1', 'gambar2'];
}
