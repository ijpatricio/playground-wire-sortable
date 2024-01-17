<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Str;
use Livewire\Component;

class TaskList extends Component
{
    protected Project $project;

    public array $ids = [];

    public function mount()
    {
        $this->ids = Task::get()->pluck('id')->toArray();
    }

    public function addTask()
    {
        $this->ids[] = (string) Str::ulid();
    }

    public function saveOrder($newOrder)
    {
        $this->ids = $newOrder;
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
