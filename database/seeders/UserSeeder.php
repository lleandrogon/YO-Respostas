<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Leandro Gonçalves',
                'email' => 'leandro@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Joana Maria',
                'email' => 'joana@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('654321'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nilmar Santos',
                'email' => 'nilmar@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('112233'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Camila Ribeiro',
                'email' => 'camila@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('senha123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fernando Oliveira',
                'email' => 'fernando@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('teste456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Patrícia Costa',
                'email' => 'patricia@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('pat123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rafael Lima',
                'email' => 'rafael@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('liminha789'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
