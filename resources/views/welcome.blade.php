@extends('layouts.app')

@section('content')

    <div class="mt-16 flex justify-center">
        <ul class="flex gap-4">
            <li><a class="hover:bg-blue-500 hover:text-white px-2 py-1 rounded" href="{{ route('home') }}">Home</a></li>
        </ul>
    </div>

    <div class="mt-32 flex justify-center">
        <livewire:task-list />
    </div>

@endsection
