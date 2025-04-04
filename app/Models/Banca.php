<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $table = 'bancas';

    protected $fillable = [
        'nome',

    ];
}
