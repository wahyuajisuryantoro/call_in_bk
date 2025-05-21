<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;

class BerandaLayanan extends Model
{
    
    protected $table = 'beranda_layanan';
    protected $fillable = ['nama_layanan', 'deskripsi', 'image', 'urutan'];
    protected $casts = [
        'urutan' => 'integer',
    ];
}
