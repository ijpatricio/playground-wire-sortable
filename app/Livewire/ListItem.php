<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class ListItem extends Component
{
    public int|string $taskId;

    public string $description = '';

    public function mount()
    {
        if ($this->isTaskInDB()) {
            $this->description = Task::find($this->taskId)->description;
        }
    }

    public function isTaskInDB(): bool
    {
        if (str($this->taskId)->isUlid()) {
            return false;
        }
         return true;
    }

    public function save()
    {
        if ($this->isTaskInDB()) {
            Task::whereId($this->taskId)->update(['description' => $this->description]);
            return;
        }

        $task = Task::create(['description' => $this->description]);

        $this->taskId = $task->id;
    }

    public function render()
    {
        return view('livewire.list-item');
    }
}
