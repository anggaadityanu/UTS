<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        if (Profile::count() === 0) {
            Profile::create([
                'name'    => 'Angga Aditya Nugraha',
                'tagline' => 'Junior Laravel Developer',
                'bio'     => 'Mahasiswa Prodi Teknik Informatika, Fakultas Ilmu Komputer Universitas Esa Unggul.',
                'email'   => 'anggaadityanu@student.esaunggul.ac.id',
                'github'  => 'https://github.com/anggaadityanu',
                'skills'  => ['Laravel', 'Filament', 'Livewire', 'Docker', 'MariaDB', 'Tailwind CSS'],
            ]);
        }
    }
}