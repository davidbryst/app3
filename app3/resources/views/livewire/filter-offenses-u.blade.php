<div class="h-full">
    {{-- <p class="absolute text-xl w-96 h-96 left-0 bg-ten text-one z-30">
        {{ $offenseType }}
        {{ $date }}
        {{ $licensePlate }}
    </p> --}}
    <div class="flex">
        <div class="flex relative px-4 py-2 rounded-lg shadow mx-4 my-2 appearance-none text-ten
            after:content-['<>']
            after:border-b-2
            after:font-semibold
            after:rotate-90
            after:right-4
            after:pointer-events-none
            after:absolute" name="" id="" placeholder="rien">
            <select wire:model="offenseType" class="appearance-none pr-8 font-semibold" name="" id="" placeholder="rien">
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
    <div class="h-[78%] shadow border-[1px] m-4 border-two rounded-xl scrollbar-hide overflow-auto">
        <div class=" grid grid-cols-3 gap-4 p-4">
            @isset($offenses)
                @foreach ($offenses as $offense)
                    <div class="relative">
                        <span class="hidden absolute px-2 py-1 top-1 right-3 bg-one text-primary rounded-xl shadow-md">justify</span>
                        <input class="hidden absolute top-3 right-3 bg-secondary w-4 h-4 rounded-lg text-one peer checked:bg-primary" type="checkbox" name="" id="">
                        <div class="border-2 border-l-8 border-primary peer-checked:border-ten peer-checked:opacity-50 text-primary px-4 py-2 gr rounded-lg
                            @if (!$offense->registered) border-rose @elseif ($offense->justify) border-ten @endif">

                            <p class="@if (!$offense->registered) text-rose @elseif ($offense->justify) text-ten @endif font-bold m-2 text-lg">license plate: <span class="text-ten ml-1 font-normal text-">{{ $offense->license_plate }}</span></p>
                            <p class="@if (!$offense->registered) text-rose @elseif ($offense->justify) text-ten @endif font-bold m-2 text-lg">offense: <span class="text-ten ml-1 font-normal text-">{{ $offense->offense_type }}</span></p>
                            <p class="@if (!$offense->registered) text-rose @elseif ($offense->justify) text-ten @endif font-bold m-2 text-lg">coste point: <span class="text-ten ml-1 font-normal text-">{{ $offense->point_cost }}</span></p>
                            <p class="@if (!$offense->registered) text-rose @elseif ($offense->justify) text-ten @endif font-bold m-2 text-lg">date: <span class="text-ten ml-1 font-normal text-">{{ $offense->created_at }}</span></p>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</div>
