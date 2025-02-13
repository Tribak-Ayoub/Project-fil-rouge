<?php

namespace Database\Seeders;

use App\Models\Absence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $absences = [
            [
                'apprenant_id' => 1,
                'seance_id' => 1,
            ],
            [
                'apprenant_id' => 2,
                'seance_id' => 2,
            ]
        ];
    
        foreach ($absences as $absence) {
            Absence::create($absence);
        }
    }
}
