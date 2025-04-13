<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ObjectType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $types = ['Franchises', 'Schedules', 'Guardians', 'Students'];

        foreach ($types as $type) {
            ObjectType::firstOrCreate(['name' => $type]);
        }
        $this->call([
            FranchiseSeeder::class,
            GuardianSeeder::class,
            StudentSeeder::class,
            ScheduleSeeder::class,
        ]);
    }
}
