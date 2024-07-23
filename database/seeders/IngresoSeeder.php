<?php

namespace Database\Seeders;

use App\Models\Ingreso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingreso = [
            'Menor a 1 S.M.V.M',
            'Entre 1 y 2 S.M.V.M',
            'Entre 3 y 5 S.M.V.M',
            'Mayor a 6 S.M.V.M'
        ];

        foreach ($ingreso as $ingreso) {
            Ingreso::create([
                'name' => $ingreso,
            ]);
        }
    }
}
