<x-layout class="h-[100vh]">
    <x-navbar/>

    <section class="relative bg-[url('{{ asset('images/hero.jpg') }}')] bg-cover bg-no-repeat bg-center h-full">
        <div class="absolute w-full h-full bg-black bg-opacity-10 flex justify-center items-center">
            <form action="" method="GET" class="relative w-[60%] p-4">
                <img src="{{ asset('images/search.png') }}" alt="" class="">
                <input id="query" name="query" type="text"
                       class="absolute top-[50%] left-[55%] translate-y-[-50%] translate-x-[-50%] w-[60%] h-16 bg-transparent mx-auto z-[20] text-xl outline-none">
            </form>
        </div>
    </section>

    <main class="relative bg-[url('{{ asset('images/navbar-background.png') }}')] bg-repeat bg-center">
        <img src="{{ asset('images/border.png') }}" alt="" class="absolute top-0 translate-y-[-80%] w-full z-[10]">

        <section class="flex flex-col items-center p-12 gap-4">
            <section class="m-4 flex flex-col items-center space-y-4">
                <h1>Filter by category</h1>

                <div class="grid grid-cols-3 gap-4">
                    @foreach($categories as $category)
                        <a href="{{ route('category.events', $category->id) }}" class="p-4 border-black border-2 bg-white rounded-lg">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>

            </section>
            @if($events->first())
                <h1 class="mt-8">Available events</h1>

                <div class="grid grid-cols-3 items-start gap-8">
                    @if($events->first())
                        @foreach($events as $event)
                            <div class="w-full lg:w-[25rem] h-[20rem] rounded-lg flex flex-col relative shadow-md">
                                <div
                                    class="h-full w-full border-2 border-black border-dashed bg-[url('{{ asset($event->image) }}')] bg-cover bg-center bg-no-repeat flex flex-col justify-end relative rounded-xl">
                                    <div class="absolute w-full h-full bg-magenta bg-opacity-40 rounded-xl"></div>
                                </div>

                                <div
                                    class="z-[10] absolute top-0 left-0 translate-x-[-5%] translate-y-[10%] flex flex-col items-start gap-2">

                                    <x-dashboard.info name="title" :value="$event->title"/>
                                    <x-dashboard.info name="seats" :value="$event->seats"/>
                                    <x-dashboard.info name="price" :value="'$' . $event->price"/>
                                    @php
                                        $date = Carbon\Carbon::parse($event->date)->format('d/m/Y');
                                    @endphp
                                    <x-dashboard.info name="date" :value="$date"/>
                                </div>

                                <a href="{{ route('event.show', $event->id) }}"
                                   class="absolute w-full h-full z-[5]"></a>
                                @if( ! $event->reservations->where('client_id', auth()->id())->first())

                                    <form action="{{ route('reservation.store', $event->id) }}" method="POST"
                                          class="absolute bottom-0 right-0 p-4 z-[10] flex items-center justify-center">
                                        @csrf

                                        <button type="submit" class="bg-magenta text-white px-4 py-2 rounded mx-auto">
                                            Book Seat
                                        </button>
                                    </form>
                                @elseif($event->remainingSeats() <= 0)
                                    <div class="absolute bottom-0 right-0 p-4 z-[10] flex items-center justify-center">

                                        <button type="submit"
                                                class="border-2 border-magenta bg-black text-white px-4 py-2 rounded mx-auto">
                                            Full
                                        </button>
                                    </div>
                                @else
                                    <div class="absolute bottom-0 right-0 p-4 z-[10] flex items-center justify-center">

                                        <button type="submit"
                                                class="border-2 border-magenta bg-black text-white px-4 py-2 rounded mx-auto">
                                            Already booked
                                        </button>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="mt-8 flex gap-8">
                    {{ $events->links() }}
                </div>
            @else
                <h1>No available events</h1>
            @endif
        </section>
    </main>
</x-layout>
