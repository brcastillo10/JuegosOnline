<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\activities;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        activities::create([
            'palabra_completa' => 'TECLADO',
            'palabra_incompleta' => 'TE_L_D_',
            'nivel' => 1
        ]);

        activities::create([
            'palabra_completa' => 'COMPUTADORA',
            'palabra_incompleta' => 'CO_P_T_D_RA',
            'nivel' => 1
        ]);
    }
}
