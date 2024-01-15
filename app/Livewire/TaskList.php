<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Component;

class TaskList extends Component
{
    public Project $project;

    public array $ids = [];

    public function mount()
    {
        $this->project = Project::with('tasks')->first();

        $this->ids = $this->project->tasks->pluck('id')->toArray();
    }

    public function addTask()
    {
        $this->ids[] = (string) Str::ulid();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
