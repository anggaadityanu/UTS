<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User Admin
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );

        // Auto assign super admin
        Artisan::call('shield:super-admin', ['--user' => $user->id]);

        // Panggil seeder lain
        $this->call([
            ProfileSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
