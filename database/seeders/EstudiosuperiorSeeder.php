<?php

namespace Database\Seeders;

use App\Models\Estudiosuperior;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudiosuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudios = [
            'Si',
            'No',
        ];

        foreach ($estudios as $estudios) {
            Estudiosuperior::create([
                'name' => $estudios,
            ]);
        }
    }
}
