<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            Notification::create([
                'message' => $faker->sentence,
                'timestamp' => $faker->dateTime,
                'responsible_for_learners_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
