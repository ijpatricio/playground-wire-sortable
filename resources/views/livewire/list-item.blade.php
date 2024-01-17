<div class="flex items-center gap-4">
    <div x-sortable-handle class="cursor-move">
        {{-- Not <x-handle /> is intentional, to ensure no bugs --}}
        @include('components.handle')
    </div>

    <div>
        {{ str($taskId)->limit(4) }}.
    </div>
    <div>
        <input type="text" wire:model.live="description" class="w-80">
        <span>
            <button
                class="px-4 py-1 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg text-sm"
                wire:click="save"
            >
                Save
            </button>
        </span>
        <span class="text-sm text-gray-600"> {{ $this->id() }} </span>
    </div>
</div>
