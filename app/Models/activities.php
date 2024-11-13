<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;

    protected $fillable = ['palabra_completa', 'palabra_incompleta', 'nivel'];

    public function puntuaciones()
    {
        return $this->hasMany(Score::class);
    }
}
