<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;

class BerandaTujuan extends Model
{
    protected $table = 'beranda_tujuan';
    protected $fillable = ['isi', 'urutan'];
}
