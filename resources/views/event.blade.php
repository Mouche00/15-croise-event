<x-layout class="h-[100vh]">
    <x-navbar />

    <section class="relative bg-[url('{{ asset($event->image) }}')] bg-cover bg-no-repeat bg-center h-full">
        <div class="absolute w-full h-full bg-black bg-opacity-30 flex justify-center items-center">

            <h1 class="text-white text-2xl">{{ $event->title }}</h1>
        </div>
    </section>

    <main class="relative bg-[url('{{ asset('images/navbar-background.png') }}')] bg-repeat bg-center">
        <div>

            <img src="{{ asset('images/border.png') }}" alt="" class="absolute top-0 translate-y-[-80%] w-full z-[10]">
        </div>

        <section class="grid grid-cols-3 items-center justify-center p-12 pt-24 gap-4">
                <div class="space-y-4 flex flex-col items-center">
                    <x-form.label name="description"/>
                    <p>{{ $event->description }}</p>
                </div>

                <div class="grid grid-cols-2 gap-y-8 items-start mx-auto p-4 border-4 border-black border-dashed rounded-lg">
                    <div class="flex flex-col gap-2">

                        <x-form.label name="seats"/>
                        <p>{{ $event->seats }}</p>
                    </div>

                    <div class="flex flex-col gap-2">

                        <x-form.label name="Remaining Seats"/>
                        <p>{{ $event->remainingSeats() }}</p>
                    </div>

                    <div class="flex flex-col gap-2">

                        <x-form.label name="price"/>
                        <p>${{ $event->price }}</p>
                    </div>

                    <div class="flex flex-col gap-2">

                        <x-form.label name="date"/>
                        @php
                            $date = Carbon\Carbon::parse($event->date)->format('d/m/Y');
                        @endphp
                        <p>{{ $date }}</p>
                    </div>
                </div>

                <div>
                    @if( ! $event->reservations->where('client_id', auth()->id())->first())

                        <form action="{{ route('reservation.store', $event->id) }}" method="POST"
                              class="-full flex items-center justify-center">
                            @csrf

                            <button type="submit" class="bg-magenta text-white px-4 py-2 rounded mx-auto">
                                Book Seat
                            </button>
                        </form>
                    @else
                        <div class="-full flex items-center justify-center">

                            <a href="{{ route('reservation.ticket', $event->id) }}"
                               class="border-2 border-magenta text-magenta px-4 py-2 rounded mx-auto">
                                Get ticket
                            </a>
                        </div>
                    @endif
                </div>

        </section>
    </main>
</x-layout>
