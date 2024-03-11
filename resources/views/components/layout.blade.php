<x-head {{ $attributes->merge(['class' => '']) }}>

    @if(Session::has('message'))
        <p id="flash-message" class="z-[100] shadow-lg fixed transition-all top-[0%] left-[50%] translate-x-[-50%] m-4 w-fit px-12 py-4 bg-{{ Session::has('error') ? 'red-500' : (Session::has('success') ? 'green-400' : 'blue-400') }}">{{ Session::get('message') }}</p>
    @endif

    @foreach ($errors->all() as $message)
        <p class="absolute z-[100] top-0 left-[50%] translate-x-[-50%] translate-y-[5%] text-xs bg-red-400 p-4">{{ $message }}</p>
    @endforeach
    {{ $slot }}

    @push('scripts')
        <script src="{{ asset('js/app.js') }}"></script>
    @endpush
</x-head>
