<?php

namespace Database\Seeders;

use App\Models\JustificationAbsence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JustificationAbsencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $justifications = [
            [
                'absence_id' => 1,
                'justif_absence' => 'Maladie',
                'is_valid' => 1,
            ],
            [
                'absence_id' => 2,
                'justif_absence' => 'Rendez-vous médical',
                'is_valid' => 0,
            ]
        ];
    
        foreach ($justifications as $justification) {
            JustificationAbsence::create($justification);
        }
    }
}
