<x-head {{ $attributes->merge(['class' => '']) }}>

    @if(Session::has('message'))
        <p class="fixed top-[0%] left-[50%] translate-x-[-50%] m-8 w-fit px-12 py-4 bg-{{ Session::has('error') ? 'red-500' : (Session::has('success') ? 'green-400' : 'blue-400') }}">{{ Session::get('message') }}</p>
    @endif
    {{ $slot }}
</x-head>
