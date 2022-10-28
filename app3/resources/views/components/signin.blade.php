<div class="w-1/2 m-auto h-2/3 bg-one rounded-xl flex shadow-xl">
    <div class="relative bg-primary text-one w-1/2 flex rounded-l-xl">
        <p class="w-3/4 text-2xl m-auto"><span class="text-5xl mb-12">Hello!</span> <br> Welcome </p>
        {{-- <p class="w-3/4 absolute top-[90%] left-1/2 -translate-x-1/2 text-md">i don't have acount</p> --}}
    </div>
    <div class="text-ten w-1/2 rounded-r-xl flex">
        <form class="m-auto" method="POST" action="{{ route('auth.login') }}">
            @csrf
            {{-- <span class="border-dashed border-2 rounded-lg px-4 py-2 border-ten mr-2"><i class="fas fa-id-card-alt"></i></span> --}}
            <span class="rounded-lg px-4 py-2 shadow mr-2 text-primary text-xl"><i class="fas fa-mobile-alt"></i></span>
            {{-- <span class="border-dashed border-2 rounded-lg px-4 py-2 border-ten mr-2"><i class="fas fa-envelope"></i></span> --}}
            <input class="my-2 rounded-lg px-4 py-2 shadow text-primary text-xl" type="tel" placeholder="tel" name="tel" id="">
            {{-- <input class="my-2 border-dashed border-2 rounded-lg px-4 py-2 border-ten" type="email" placeholder="email" name="email" id=""> --}}
            <br>
            <span class="rounded-lg px-4 py-2 shadow mr-2 text-primary text-xl"><i class="fas fa-lock"></i></span>
            <input class="my-2 rounded-lg px-4 py-2 shadow text-primary text-xl" type="password" placeholder="password" name="password" id="">

            <div class="mt-6 m-auto">
                <button class="auth-form-button | mr-4 border-2 text-primary text-xl font-bold border-primary rounded-lg px-4 py-2" type="reset">
                    <i class="fas fa-redo-alt"></i><span class="ml-4 duration-75">reset</span>
                </button>
                <button class="auth-form-button | mr-4 bg-primary text-xl font-bold text-one rounded-lg px-4 py-2" type="submit">
                    <i class="fas fa-sign-in-alt"></i><span class="ml-4 duration-75">sign in</span>
                </button>
            </div>
        </form>
    </div>
</div>
