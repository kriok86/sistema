<?php

namespace Database\Seeders;

use App\Models\Trabajo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trabajo = [
            'Relacion de dependecia',
            'Independiente',
        ];

        foreach ($trabajo as $trabajo) {
            Trabajo::create([
                'name'=>$trabajo,
            ]);
        }
    }
}
