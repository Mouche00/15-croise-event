@props(['links', 'role'])

<div class="mr-4 p-8 w-64 h-full bg-white border-4 border-dashed border-black rounded-lg flex flex-col items-center justify-between gap-6 text-black text-xl">
    <img src="{{ asset('images/logo.png') }}" alt="" class="">

    <div class="flex flex-col items-center justify-between gap-6">
        @foreach(unserialize($links) as $link)
            <a href="{{ route($role . '.' . $link) }}" class="px-8 py-2 transition-all hover:bg-black hover:text-white rounded-lg"> {{ ucwords($link) }} </a>
        @endforeach
    </div>

    <a href="{{ route('logout') }}" class="px-8 py-2 transition-all hover:bg-black hover:text-white rounded-lg"> Logout </a>
</div>
