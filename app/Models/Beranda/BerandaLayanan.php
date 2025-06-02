<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BerandaLayanan extends Model
{
    
    protected $table = 'beranda_layanan';
    protected $fillable = ['nama_layanan', 'deskripsi', 'image', 'urutan'];
    protected $casts = [
        'urutan' => 'integer',
    ];

    public function isiLayanan(): HasMany
    {
        return $this->hasMany(IsiLayanan::class, 'layanan_id');
    }

}
