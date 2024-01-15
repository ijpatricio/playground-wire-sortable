<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class ListItem extends Component
{
    public int|string $id;

    public Task|null $task = null;

    public string $description = '';

    public function mount($id)
    {
        if (! str($id)->isUlid()) {
            $this->task = Task::find($id);
            $this->description = $this->task->description;
        } else {
            $this->task = new Task;
        }
    }

    public function render()
    {
        return view('livewire.list-item');
    }
}
