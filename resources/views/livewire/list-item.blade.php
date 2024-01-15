<div class="flex items-center gap-4">
    <div>
        {{-- Not <x-handle /> is intentional, to ensure no bugs --}}
        @include('components.handle')
    </div>

    <div>
        {{ $id }}.
    </div>
    <div>
        <input type="text" wire:model="description" class="w-80">
    </div>
</div>
