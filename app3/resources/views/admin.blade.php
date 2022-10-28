@extends('layouts.layout')

@section('title', 'SoothRoad | home Admin')

@section('content')
    <div class="flex w-full h-full">
        <div class="w-3/4 h-full py-16 m-auto flex">
            @livewire('search-users')
            <div class="w-3/4 px-4 py-4">
                @livewire('filter-offenses-a')
            </div>
        </div>
    </div>
@endsection
