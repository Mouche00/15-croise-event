@props(['role'])

<div id="burger-menu" class="mr-4 h-fit bg-white border-4 border-dashed border-black rounded-lg text-black text-xl lg:rotate-[-5deg] hidden lg:block fixed lg:static z-[20] lg:z-[1]">
    <button onclick="closeMenu()" type="button" class="text-black font-black p-4 lg:hidden">x</button>
    <div class="p-16 py-8 flex flex-col items-center justify-between gap-6">
        {{--    <img src="{{ asset('images/logo.png') }}" alt="" class="">--}}
        <div class="relative w-64 h-64">
            <img src="{{ asset(auth()->user()->image) }}" alt="" class="absolute w-full h-full border-2 border-white rounded z-[20]">
            <div class="absolute top-0 left-0 translate-x-[-5%] translate-y-[5%] w-full h-full bg-black z-[10] rounded"></div>
        </div>

        <div class="grid grid-cols-2 items-center gap-2 gap-y-4 mt-4">
            <x-form.label name="name"/>
            <p>{{ auth()->user()->name }}</p>

            <x-form.label name="role"/>
            <p>{{ auth()->user()->role()->first()->name }}</p>
        </div>
    </div>


    <a href="{{ route('logout') }}" class="inline-block py-4 text-center w-full transition-all bg-magenta text-white hover:bg-black hover:text-white"> Logout </a>
</div>
