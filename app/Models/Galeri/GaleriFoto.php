<?php

namespace App\Models\Galeri;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GaleriFoto extends Model
{
    use HasFactory;

    protected $table = 'galeri_foto';

    protected $fillable = [
        'judul_foto',
        'tanggal_upload',
        'kreator',
        'foto',
    ];

    protected $casts = [
        'tanggal_upload' => 'date',
    ];
}
