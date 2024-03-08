<div class="bg-white w-full h-32 flex flex-col relative">
    <div class="z-[10] bg-[url('{{ asset('images/navbar-background.png') }}')] bg-repeat bg-center flex flex items-center justify-between px-16 pt-4">
        <div class="w-[15%] order-1">
            <img src="{{ asset('images/logo-2.png') }}" alt="" class="w-[25rem] absolute top-[0%] z-[10]">
        </div>


        <!-- NAVBAR ITEMS -->
        @php
            $items = serialize(['home', 'events', 'contact']);
        @endphp
        <x-navbar.list :items="$items" class="order-0 w-[30%]"/>

        <!-- AUTH/PROFILE -->
        @php
            $items = serialize(['login', 'register']);
        @endphp
        <x-navbar.list :items="$items" class="justify-center order-2 w-[30%]"/>
    </div>
    <img class="w-full absolute top-[100%] z-[5]" src="{{ asset('images/navbar.png') }}" alt="">
</div>
