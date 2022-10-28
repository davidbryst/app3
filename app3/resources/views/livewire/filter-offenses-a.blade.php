<div class="h-full">
    <div class="flex">
        <div class="flex relative px-4 py-2 rounded-lg shadow mx-4 my-2 appearance-none text-ten
            after:content-['<>']
            after:border-b-2
            after:font-semibold
            after:text-sm
            after:rotate-90
            after:right-4
            after:pointer-events-none
            after:absolute" name="" id="" placeholder="rien">
            <select wire:model="offenseType" class="text-sm appearance-none pr-8 font-semibold" name="" id="" placeholder="rien">
                <option value="">all offense</option>
                <option value="speeding">speeding</option>
                {{-- <option value="offense-type2">offense type2</option> --}}
            </select>
        </div>
        <input wire:model="date" class="px-4 py-2 text-sm ont-semibold rounded-lg shadow mx-4 my-2" type="month" placeholder="year">
        <div class="flex text-primary items-center">
            {{-- <p class="font-bold m-2 text-lg">3 <span class="text-ten ml-1 font-normal text-">offense type 1</span></p> --}}
            @isset($offenses)
                <p class="font-bold m-2 text-md px-4 py-2 rounded-lg shadow mx-4 my-2">{{$offenses->count()}}<span class="text-ten ml-1 font-normal">offences</span></p>
            @endisset
            {{-- <p class="font-bold m-2 text-md px-4 py-2 rounded-lg shadow mx-4 my-2">license plate <span class="text-ten ml-1 font-normal text-">all</span></p> --}}
        </div>
        <div class="px-4 py-2 rounded-lg shadow mx-4 my-2">
            <span class="mx-0.5 text-primary font-bold">license plate:  </span>
            <input wire:model="licensePlate" class="text-sm font-semibold border-b-2 border-primary" type="search" name="search" id="">
        </div>
    </div>
    <div class="h-[78%] shadow border-[1px] border-two rounded-xl scrollbar-hide m-4 overflow-auto">
        <div class=" grid grid-cols-3 gap-4 p-4">
            @isset($offenses)
                @foreach ($offenses as $offense)
                    @livewire('single-offenses', ['offense' => $offense])
                @endforeach
            @endisset
        </div>
    </div>
</div>
