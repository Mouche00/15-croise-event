<x-head {{ $attributes->merge(['class' => '']) }}>

    @if(Session::has('message'))
        <p id="flash-message" class="fixed transition-all top-[0%] left-[50%] translate-x-[-50%] m-4 w-fit px-12 py-4 bg-{{ Session::has('error') ? 'red-500' : (Session::has('success') ? 'green-400' : 'blue-400') }}">{{ Session::get('message') }}</p>
    @endif
    {{ $slot }}

    @push('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    @endpush
</x-head>
