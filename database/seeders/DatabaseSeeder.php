<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
    'name' => 'Sk Adrian',
    'email' => 'test@test.com', // pode manter ou trocar
    'password' => bcrypt('12345678'), // opcional (pra login fácil)

     ]);
    }
}
