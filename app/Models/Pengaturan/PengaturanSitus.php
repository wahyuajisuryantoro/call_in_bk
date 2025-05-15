<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Model;

class PengaturanSitus extends Model
{
    protected $table = 'pengaturan_situs';
    protected $fillable = ['nama_situs', 'deskripsi', 'logo', 'email', 'telepon', 'alamat', 'facebook', 'instagram', 'twitter', 'map', 'link_map'];
}
