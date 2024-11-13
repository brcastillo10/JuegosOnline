<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'activities_id', 'puntuacion', 'completado'];

    public function activities()
    {
        return $this->belongsTo(activities::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
