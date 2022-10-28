<div class="w-1/4 bg-two border-three border-2 rounded flex flex-col items-center">
    <div class="m-8 text-primary px-4 py-2 bg-one rounded-xl shadow">
        <form action="">
            <input wire:model.debounce.100ms="search" class="border-b-2 border-primary mx-2 my-1" type="search" name="search" id="">
        </form>
    </div>
    <div class="h-full overflow-scroll scrollbar-hide">
        @isset($users)
            @foreach ($users as $user)
                @livewire('modify-user', ['user' => $user])
            @endforeach
        @endisset
    </div>
</div>
