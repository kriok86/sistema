<?php

namespace Database\Seeders;

use App\Models\Punto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $puntos = [
            '500',
            '1200',
            '450',
            '690',
        ];

        foreach ($puntos as $puntos) {
            Punto::create([
                'value' => $puntos,
            ]);
        }
    }
}
