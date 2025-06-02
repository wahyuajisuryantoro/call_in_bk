<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IsiLayanan extends Model
{
    use HasFactory;

    protected $table = 'isi_layanan';

    protected $fillable = [
        'layanan_id',
        'judul',
        'deskripsi_layanan',
        'gambar_layanan',
        'urutan'
    ];

    protected $casts = [
        'gambar_layanan' => 'array',
        'urutan' => 'integer'
    ];

    /**
     * Relasi ke tabel beranda_layanan
     */
    public function layanan(): BelongsTo
    {
        return $this->belongsTo(BerandaLayanan::class, 'layanan_id');
    }

    /**
     * Accessor untuk mendapatkan gambar pertama
     */
    public function getGambarUtamaAttribute(): ?string
    {
        $gambar = $this->gambar_layanan;
        return is_array($gambar) && !empty($gambar) ? $gambar[0] : null;
    }

    /**
     * Accessor untuk menghitung jumlah gambar
     */
    public function getJumlahGambarAttribute(): int
    {
        $gambar = $this->gambar_layanan;
        return is_array($gambar) ? count($gambar) : 0;
    }

    /**
     * Scope untuk mengurutkan berdasarkan urutan
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('urutan', 'asc');
    }

    /**
     * Validasi maksimal 5 gambar
     */
    public static function validateGambar(array $gambar): bool
    {
        return count($gambar) <= 5 && count($gambar) >= 1;
    }
}
