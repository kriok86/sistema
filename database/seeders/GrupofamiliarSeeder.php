<?php

namespace Database\Seeders;

use App\Models\Grupofamiliar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupofamiliarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //coloco las opciones que va a tener el formulario
        $familia = [
            'Monoparental',
            'Menores de 18 años',
            'Integrante de la familia con discapacidad',
        ];

        foreach ($familia as $familia) {
            Grupofamiliar::create([
                'name' => $familia,
            ]);
        }
    }
}
