<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectFilter extends Component
{
    public string $filter = 'all';

    public function render()
    {
        $projects = Project::when($this->filter !== 'all', function ($query) {
            $query->where('status', $this->filter);
        })->orderBy('order')->get();

        return view('livewire.project-filter', compact('projects'));
    }
}
