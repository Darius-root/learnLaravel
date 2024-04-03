<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Option;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $option= Option::factory(10)->create();

        // Création de 50 propriétés avec au maximum 3 options attachées
        // Les options sont sélectionnées aléatoirement parmi les 10 dernières générées
        Property::factory(50)
            ->hasAttached($option->random(3))
            ->create();

        \App\Models\User::factory()->create([
             'name' => 'Test User',
            'email' => 'asmin@admin.com',
            'password'=>'admin'
        ]);
    }
}
