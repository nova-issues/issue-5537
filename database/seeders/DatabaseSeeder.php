<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        
        $me = User::factory()->create([
            'name' => 'Laravel Nova',
            'email' => 'nova@laravel.com',
            'password' => $password,
        ]);

        Project::factory()->hasAttached($me)->count(10)->create();
    }
}
