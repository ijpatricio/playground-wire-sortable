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


    <div
        x-data="{
            sortableList: null
        }"
        x-init="sortableList = Sortable.create($el, {
            animation: 300,
            draggable: '[x-sortable-item]',
            handle: '[x-sortable-handle]',
            dataIdAttr: 'x-sortable-item',
            ghostClass: 'opacity-20',
        })"
        @dragend.stop="
            $wire.saveOrder(sortableList.toArray())
        "
    >
        @foreach($this->ids as $taskId)
            <div id="item-{{ $taskId }}" wire:key="item-{{ $taskId }}" class="my-4" x-sortable-item="{{ $taskId }}">
                <livewire:list-item :key="$taskId" :$taskId />
            </div>
        @endforeach
    </div>

{{--    @include('scripts')--}}

</div>

