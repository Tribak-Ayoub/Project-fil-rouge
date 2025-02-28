<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            [
                'message' => 'Vous avez atteint le seuil d\'absences.',
                'apprenant_id' => 1,
                'responsable_id' => 2,
            ],
            [
                'message' => 'Avertissement pour absences répétées.',
                'apprenant_id' => 3,
                'responsable_id' => 2,
            ]
        ];
    
        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}
