<div class='h-16 fixed w-screen flex shadow-md rounded-b bg-one'>
    <div class="w-3/4 m-auto flex items-center justify-between text-xl font-bold">
        <div>
            <a class="hidden" href=""><img class="w-16" src={{ asset('img/logo.png') }} alt="logo"/></a>
            <a href="/" class="mx-4 text-secondary ">
                <span class="text-primary">
                    <span class="bg-primary text-one rounded px-1 py-0.5 mr-0.5">S</span>mooth
                </span>
                    <span class="bg-secondary text-one rounded px-1 py-0.5 ml-1.5 mr-0.5">R</span>oad
            </a>
        </div>
        <nav class="flex">
            <a class="px-4 py-2 text-secondary hover:text-primary" href="/contact">Contact</a>
            {{-- <a class="px-4 py-2 text-secondary hover:text-primary" href="/about">About</a> --}}
            @auth
                <a class="px-4 py-2 text-secondary hover:text-primary" href="{{ route('auth.logout') }}">
                    <span>{{ Auth::user()->name }}</span>
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            @endauth
            @auth('admin')
                <a class="px-4 py-2 text-secondary hover:text-primary" href="{{ route('auth.logout') }}">
                    <span>{{ Auth::guard('admin')->user()->name }}</span>
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            @endauth
        </nav>
    </div>
</div>
