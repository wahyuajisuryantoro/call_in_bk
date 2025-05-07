<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Model;

class PengaturanSitus extends Model
{
    protected $table = 'pengaturan_situs';
    protected $fillable = ['nama_situs', 'logo', 'email', 'telepon', 'alamat', 'facebook', 'instagram', 'twitter'];
}
