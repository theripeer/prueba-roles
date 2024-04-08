<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->state([
                'email' => 'cristianandrescv@gmail.com'
            ])
            ->administrator()
            ->create();

        User::factory()
            ->state([
                'email' => 'supervisor@email.com'
            ])
            ->supervisor()
            ->create();

        User::factory()
            ->state([
                'email' => 'cuadrilla1@email.com'
            ])
            ->equipo()
            ->create();
    }
}
