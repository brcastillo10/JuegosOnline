<?php

namespace App\Http\Controllers;

use App\Models\activities;
use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Log;
class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = activities::where('nivel', 1)->inRandomOrder()->first();
        return view('games.completeWord', compact('activities'));
    }

    public function verificar(Request $request, activities $activities)
    {
        $palabraUsuario = implode('', (array) $request->input('palabra_completa'));

        if (is_string($palabraUsuario) && is_string($activities->palabra_completa)) {
            if (strtoupper($palabraUsuario) === strtoupper($activities->palabra_completa)) {
                $puntuacion = 100;
                $completado = true;
            } else {
                $puntuacion = 0;
                $completado = false;
            }
        } else {
            $puntuacion = 0;
            $completado = false;
            Log::error('Error: `palabra_completa` no es un string', [
                'palabra_completa' => $palabraUsuario,
                'activities->palabra_completa' => $activities->palabra_completa,
            ]);
        }

        Score::create([
            'user_id' => auth()->id(),
            'activities_id' => $activities->id,
            'puntuacion' => $puntuacion,
            'completado' => $completado,
        ]);

        return redirect()->route('activities.resultado', ['completado' => $completado]);
    }

}
