<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Classes::create([
            'name' => 'warrior',
            'display_name' => 'Guerrier',
            'default_attack' => 10,
            'default_defense' => 10,
            'default_dodge' => 10,
            'default_strength' => 10,
            'default_dexterity' => 10,
            'default_constitution' => 10,
            'default_intelligence' => 10,
        ]);
    }
}
