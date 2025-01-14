<?php

namespace Database\Seeders;

use App\Models\AbsenceSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AbsenceSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            AbsenceSession::create([
                'date' => $faker->date(),
                'timeSlot' => $faker->time(),
            ]);
        }
    }
}
