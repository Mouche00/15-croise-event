<x-layout class="relative h-[100vh] bg-[url('{{ asset('images/register.jpg') }}')] bg-contain bg-repeat bg-opacity-50">
    <div class="h-full bg-gray-500 bg-opacity-40">
        <div class="px-4 py-2 mx-2 flex flex-row justify-start">
            <a href="{{url('/')}}" class=" text-2xl font-medium rounded-full text-main transition-all hover:bg-main hover:text-white float-right">
                <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <g>
                        <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                        </path>
                    </g>
                </svg>
            </a>
        </div>
        <main class="h-[80vh] p-16 flex flex-col gap-16">
            <h1 class="text-5xl font-extrabold mx-auto text-black w-fit tex-center py-4 px-8 bg-white">Pick your poison</h1>
            <div class="h-full flex flex-col lg:flex-row gap-16">
                <x-register.card class="" role="organizer" />
                <x-register.card role="client" />
            </div>
        </main>

        <!-- CLIENT FORM -->
        <x-form.layout role="client">

            @include('auth._default-inputs')
        </x-form.layout>

        <!-- ORGANIZER FORM -->
        <x-form.layout role="organizer">

            @include('auth._default-inputs')
        </x-form.layout>

        <div id="overlay" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] h-full w-full bg-black opacity-[0] z-[-50] transition-all "></div>
    </div>

    @push('scripts')
        <script src="/js/register.js"></script>
    @endpush
</x-layout>
