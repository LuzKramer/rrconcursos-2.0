<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assunto extends Model
{
    protected $table = 'assuntos';

    protected $fillable = [
        'nome',
        'materia_id',
    ];

    public function materia():BelongsTo{
        return $this->belongsTo(Materia::class);
    }
}
