@props(['name'])

<li class="text-xl text-white font-black py-16 px-16 bg-[url('{{ asset('images/navbar-item.png') }}')] bg-cover rotate-[{{ random_int(-20, 20) }}deg]">
    <a href="{{ $name }}">
        {{ ucwords($name) }}
    </a>
</li>
