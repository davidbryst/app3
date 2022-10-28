<div class="scale-75 hover:scale-90 duration-75 w-full flex justify-between items-center shadow-md bg-ten text-one rounded-xl overflow-hidden">
    <div class="flex flex-col justify-center items-center bg-ten p-2">
        <img class="m-1 w-2 h-10 rounded-full border-2 border-ten p-1 fill-primary" src="{{ asset('img/SVG/ci_black.svg') }}" alt="ci">
        <span class="m-1 text-ten text-xl font-semibold">CI</span>
    </div>
    <div class="flex mr-2">
        <div class="flex-1 h-10 w-5 bg-orange"></div>
        <div class="flex-1 h-10 w-5 bg-white"></div>
        <div class="flex-1 h-10 w-5 bg-green"></div>
    </div>
    <p class="text-3xl font-semibold">{{ $number }}</p>
    <div class="flex flex-col justify-center items-center bg-ten p-2">
        <img class="m-1 w-2 h-10 rounded-full border-2 border-ten p-1 fill-primary" src="{{ asset('img/SVG/ci_black.svg') }}" alt="ci">
        <span class="m-1 text-ten text-xl font-semibold">CI</span>
    </div>
</div>