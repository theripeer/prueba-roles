<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Cristian Cortes Vega',
            'email' => 'cristianandrescv@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),// password
            'role' => 1,
            'remember_token' => Str::random(10),
        ]);


        /*
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
            ->create();*/
    }
}
