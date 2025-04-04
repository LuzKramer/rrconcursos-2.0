<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Materia extends Model
{
    protected $table = 'materias';

    protected $fillable = [
        'nome',
    ];

    public function assuntos(): HasMany{
        return $this->hasMany(Assunto::class);
    }
}
