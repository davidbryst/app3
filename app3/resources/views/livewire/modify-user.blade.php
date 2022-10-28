<div class="m-4 flex items-center px-4 py-2 bg-one rounded-xl shadow">
    <img class="object-cover bg-one p-1.5 shadow border-two h-12 w-12 overflow-hidden border-2 rounded-lg m-3" src="https://img.icons8.com/ios-filled/250/000000/user.png" alt="pp">
    {{-- <span class="text-3xl text-primary underline underline-offset-4 font-semibold">Full Name</span><br><br> --}}
    <div class="relative m-3 w-[80%]">
        <p class="text-2xl text-primary font-bold">{{ $user->name }}</p>
        <p class="text-lg text-primary font-normal">+225 {{ $user->tel }}</button></p>
        <button wire:click="toggleActive" class="absolute font-normal -top-7 -right-8 text-sm text-one bg-primary rounded p-1.5"><i class="fas fa-user-edit"></i>
    </div>
    <div class="absolute{{ (!$active)? ' hidden ' : ' ' }}flex z-10 h-screen w-screen bg-popup top-0 left-0">
        <div class="m-auto bg-one rounded-xl px-4 py-2">
            <form action="">
                <input class="block px-4 py-2 rounded-xl border-2 border-primary text-primary my-4 mx-2" type="text" name="fullName" placeholder="full name" id="">
                <input class="block px-4 py-2 rounded-xl border-2 border-primary text-primary my-4 mx-2" type="tel" name="numero" placeholder="numero" id="">
                <input class="block px-4 py-2 rounded-xl border-2 border-primary text-primary my-4 mx-2" type="password" name="newPassword" placeholder=" new Password" id="">
                <input class="block px-4 py-2 rounded-xl border-2 border-primary text-primary my-4 mx-2" type="password" name="confirmePassword" placeholder="confirme Password" id="">
                <div class="flex justify-center items-center">
                    <input class="inline px-4 py-2 rounded-xl bg-primary text-one my-4 mx-2" type="submit" value="submit">
                    <span wire:click="toggleActive" class="cursor-pointer inline px-4 py-2 rounded-xl border-2 border-primary text-primary m-4">close</span>
                </div>
            </form>
        </div>
    </div>
</div>
