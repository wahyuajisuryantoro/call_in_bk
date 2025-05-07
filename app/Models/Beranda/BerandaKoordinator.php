<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Model;

class BerandaKoordinator extends Model
{
    protected $table = 'beranda_koordinator';
    protected $fillable = ['nama', 'foto', 'sambutan'];
}
