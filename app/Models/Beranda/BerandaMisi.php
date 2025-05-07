<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;

class BerandaMisi extends Model
{
    protected $table = 'beranda_misi';
    protected $fillable = ['isi', 'urutan'];
}
