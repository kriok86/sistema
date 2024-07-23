<?php

namespace Database\Seeders;

use App\Models\Antiguedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntiguedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $antiguedad = [
            'Mas de 10 años',
            'Entre 5 y 9 años',
            'Menos de 5 años',
        ];

        foreach ($antiguedad as $antiguedad) {
            Antiguedad::create([
                'name'=> $antiguedad,
            ]);
        }
    }
}
