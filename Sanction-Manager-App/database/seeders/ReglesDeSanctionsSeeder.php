<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\PkgSanction\App\Models\RegleDeSanction;

class ReglesDeSanctionsSeeder extends Seeder
{
    public function run()
    {
        // RegleDeSanction::truncate();

        RegleDeSanction::insert([
            [
                'titre'                 => 'Avertissement après 3 absences',
                'description'           => 'Envoi d\'un e-mail d\'avertissement',
                'absences_max'          => 3,
                'penalite'              => 'avertissement',
                'seuil_de_notification' => 2,
                'duree'                 => 7,
                'note'                  => 'Appliqué sur une semaine glissante',
                'created_at'            => now(),
                'updated_at'            => now(),
            ],
            [
                'titre'                 => 'Suspension après 5 absences',
                'description'           => 'Suspension de l\'accès pendant 1 mois',
                'absences_max'          => 5,
                'penalite'              => 'suspension',
                'seuil_de_notification' => 4,
                'duree'                 => 30,
                'note'                  => 'Notification 3 jours avant',
                'created_at'            => now(),
                'updated_at'            => now(),
            ],
        ]);
    }
}
