<x-layout class="h-[100vh]">
    <x-navbar />

    <section class="relative bg-[url('{{ asset('images/hero.jpg') }}')] bg-cover bg-no-repeat bg-center h-full">
        <div class="absolute w-full h-full bg-black bg-opacity-10 flex justify-center items-center">
            <form action="" method="GET" class="relative w-[60%] p-4">
                <img src="{{ asset('images/search.png') }}" alt="" class="">
                <input id="query" name="query" type="text" class="absolute top-[50%] left-[55%] translate-y-[-50%] translate-x-[-50%] w-[60%] h-16 bg-transparent mx-auto z-[20] text-xl outline-none">
            </form>
        </div>
    </section>

    <main class="relative bg-[url('{{ asset('images/navbar-background.png') }}')] bg-repeat bg-center h-64">
        <img src="{{ asset('images/border.png') }}" alt="" class="absolute top-0 translate-y-[-80%] w-full z-[10]">

        <section class="flex flex-col items-center p-12 gap-4">
            <h1>Available events</h1>

            <div class="grid grid-cols-3 items-start gap-8">

                @foreach($events as $event)
                    <div class="bg-red-500 h-32">
                        1
                    </div>
                @endforeach
            </div>
        </section>
    </main>
</x-layout>
