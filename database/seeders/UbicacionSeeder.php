<?php

namespace Database\Seeders;

use App\Models\Ubicacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ubicacion = [
            'Zona inundable',
            'Zona de bardas',
            'Zona urbana',
            'Sector basural',
        ];

        foreach ($ubicacion as $ubicacion) {
            Ubicacion::create([
                'name'=>$ubicacion,
            ]);
        }
    }
}
