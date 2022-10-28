@extends('layouts.layout')

@section('title', 'SoothRoad | home')

@section('content')
    <div class="flex w-full h-full">
        <div class="w-3/4 h-full py-16 m-auto flex">
            <div class="w-1/4 bg-two border-three border-2 rounded flex flex-col items-center">
                <div class="mt-8">
                    <img class="object-cover bg-one shadow border-two h-32 w-32 overflow-hidden border-2 rounded-xl my-3" src="https://img.icons8.com/ios-filled/250/000000/user.png" alt="pp">
                    {{-- <span class="text-3xl text-primary underline underline-offset-4 font-semibold">Full Name</span><br><br> --}}
                    @isset($user)
                        <span class="text-lg text-primary font-bold">Name: <span class="text-secondary font-normal">{{ $user->name }}</span></span><br>
                        <span class="text-lg text-primary font-bold">Phone: <span class="text-secondary font-normal">+255 {{ $user->tel }}</span></span><br>
                    @endisset
                    @livewire('change-password', ['userId' => $user->id])
                    {{-- <button class="block text-lg text-one bg-primary font-bold mt-2 rounded px-4 py-2 mb-2">logout</button> --}}
                    <p class="text-2xl text-primary font-bold mt-2 mb-2">your license plate</p>
                </div>
                <div class="h-[57%] w-[90%] mt-2 scrollbar-hide overflow-scroll">
                    @isset($licenses)
                        @foreach ($licenses as $license)
                            <x-license_plate_blue number="{{ $license->license }}" />
                        @endforeach
                    @endisset
                    {{-- <x-license_plate_yellow number="D10 700" />
                    <x-license_plate_orange number="123 CD 56" />
                    <x-license_plate_green number="123 IT 56" />
                    <x-license_plate_bad number="BAD 0000" />
                    <x-license_plate_noir number="12345" /> --}}
                </div>
            </div>
            <div class="w-3/4 px-4 py-4">
                @livewire('filter-offenses-u', ['licenses' => $licenses])
            </div>
        </div>
    </div>
@endsection
