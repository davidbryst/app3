<div>
    <button wire:click="toggleActive" class="block text-lg text-one bg-primary font-bold mt-2 rounded px-4 py-2 mb-2">
        change password
    </button>
    <div class="absolute {{ (!$active)? "hidden" : '' }} flex z-20 h-screen w-screen bg-popup top-0 left-0">
        <div class="m-auto bg-one rounded-xl px-4 py-2 flex">
            <form>
                <input class="block px-4 py-2 rounded-xl border-2 border-primary text-primary my-4 mx-2" type="password" name="oldPassword" placeholder="old Password" id="">
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
