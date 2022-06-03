<section class="w-full bg-zinc-900 px-4 py-2 relative" x-data="{search: '', toggle: false}">
    <div class="w-fit h-fit text-zinc-400 absolute inset-y-5 inset-x-8 cursor-pointer" @click="toggle = !toggle">
        {{-- search show while toggle false--}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute inset-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
        x-show="!toggle"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="scale-50 rotate-90 opacity-0"
        x-transition:enter-end="scale-100 rotate-0 opacity-100"
        x-transition:leave="transition ease-in-out duration-300"
        x-transition:leave-start="scale-100 rotate-0 opacity-100"
        x-transition:leave-end="scale-50 rotate-90">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>

        {{-- back show while toggle true --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
        x-show="toggle"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="scale-50 -rotate-90 opacity-0"
        x-transition:enter-end="scale-100 rotate-0 opacity-100"
        x-transition:leave="transition ease-in-out duration-300"
        x-transition:leave-start="scale-100 rotate-0 opacity-100"
        x-transition:leave-end="scale-50 -rotate-90 opacity-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
    </div>
    <input type="search" name="search" id="search" class="py-2 pl-12 pr-5 bg-zinc-800 placeholder:text-zinc-400 text-white w-full ring-none border-none rounded-md" placeholder="Search or start new chat" x-model="search" @keyDown="toggle = true" @blur="search != '' ? toggle=true : toggle=false" :value="search">
    <div class="w-fit h-fit text-zinc-400 absolute inset-y-5 right-8 cursor-pointer" @click="toggle = false; search = ''">
        {{-- close search modal--}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
        x-show="search != ''">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>
</section>