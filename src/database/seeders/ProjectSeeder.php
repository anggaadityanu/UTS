<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        if (Project::count() === 0) {
            Project::create([
                'title'             => 'Nama Project Akhir Kamu',
                'slug'              => 'project-akhir',
                'short_description' => 'Deskripsi singkat project akhir kamu.',
                'is_final_project'  => true,
                'status'            => 'on_progress',
                'problem_analysis'  => '<p>Isi dari laporan kamu...</p>',
            ]);
        }
    }
}