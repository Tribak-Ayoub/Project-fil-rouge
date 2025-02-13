<?php

namespace Database\Seeders;

use App\Models\ReglesDeSanction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReglesDeSanctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regles = [
            [
                'titre' => 'Règle 1',
                'description' => 'Description de la règle 1',
                'absences_max' => 3,
                'penalite' => 'Avertissement',
                'seuil_de_notification' => 2,
                'duree' => 30,
                'note' => 'Note optionnelle',
            ],
            [
                'titre' => 'Règle 2',
                'description' => 'Description de la règle 2',
                'absences_max' => 5,
                'penalite' => 'Amende',
                'seuil_de_notification' => 3,
                'duree' => 60,
            ]
        ];

        foreach ($regles as $regle) {
            ReglesDeSanction::create($regle);
        }
    }
}
