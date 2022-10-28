<div class="relative group">
    @if (!(!$offense->registered))
        <div class="absolute border-[0.5px] border-primary duration-75 opacity-0 translate-x-8 group-hover:opacity-100 group-hover:translate-x-0 top-3 right-3 px-2 py-1 bg-one flex items-center text-primary rounded-xl shadow">
            <span class="mx-0.5">{{ ($justify)? '' : 'un' }}justify</span>
            <input wire:click="update" class="bg-primary text-one rounded-md px-2 py-1 m-2" type="button" value="{{ ($justify)? 'un' : '' }}justify" name="" id="">
        </div>
    @endif
    <div class="border-2 border-l-8 text-primary px-4 py-2 gr rounded-lg
        @if (!$offense->registered) border-rose @elseif ($justify) border-ten @endif">

        <p class="@if (!$offense->registered) text-rose @elseif ($justify) text-ten @endif font-bold m-2 text-lg">license plate: <span class="text-ten ml-1 font-normal text-">{{ $offense->license_plate }}</span></p>
        <p class="@if (!$offense->registered) text-rose @elseif ($justify) text-ten @endif font-bold m-2 text-lg">offense: <span class="text-ten ml-1 font-normal text-">{{ $offense->offense_type }}</span></p>
        <p class="@if (!$offense->registered) text-rose @elseif ($justify) text-ten @endif font-bold m-2 text-lg">coste point: <span class="text-ten ml-1 font-normal text-">{{ $offense->point_cost }}</span></p>
        <p class="@if (!$offense->registered) text-rose @elseif ($justify) text-ten @endif font-bold m-2 text-lg">date: <span class="text-ten ml-1 font-normal text-">{{ $offense->created_at }}</span></p>
    </div>
</div>
