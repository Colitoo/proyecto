<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PerfilesSeeder;
//use Database\Seeders\PersonasSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            PerfilesSeeder::class,
            //PersonasSeeder::class,
            ProductoSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
