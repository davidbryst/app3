<div class="relative scale-75 hover:scale-[.80] duration-75 group">
    <span class="absolute bg-primary border-r-2 border-b-2 border-one duration-200 rounded-tl-md rounded-br-md top-0 left-0 text-xl px-2 py-1 text-one font-semibold hidden group-hover:inline">coint: <span class="font-normal">12</span></span>
    <div class="w-full flex justify-between items-center shadow-md bg-blue text-one rounded-xl overflow-hidden">
        <div></div>
        <p class="text-3xl font-semibold">{{ $number }}</p>
        <div class="flex flex-col justify-center items-center bg-primary p-2">
            <img class="m-1 w-10 h-10 rounded-full border-2 border-white p-1 fill-primary" src="{{ asset('img/SVG/ci_white.svg') }}" alt="ci">
            <span class="m-1 text-white text-xl font-semibold">CI</span>
        </div>
    </div>
</div>
