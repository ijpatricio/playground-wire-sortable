
<div>
    <div class="my-8">
        DUMP IDs
        @dump($ids)
    </div>

    <div>
        <button
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg"
            wire:click="addTask"
        >
            Add task
        </button>
        <button
            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg"
            wire:click="$refresh"
        >
            Refresh wire
        </button>
    </div>

    <div class="my-8">
        The List
    </div>

    @foreach($this->ids as $taskId)
        <div wire:key="item-{{ $taskId }}" class="my-4">
            <livewire:list-item :key="$taskId" :id="$taskId"/>
        </div>
    @endforeach
</div>
