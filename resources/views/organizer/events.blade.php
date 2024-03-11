<x-dashboard.layout :links="$links" :role="$role">

    <div class="w-full">
        <section class="flex flex-col lg:grid grid-cols-3 items-start gap-16">
            @if($events->first())
            @foreach($events as $event)
                <div class="w-full lg:w-[25rem] h-[20rem] rounded-lg flex flex-col relative shadow-md">
                    <div class="h-full w-full border-2 border-black border-dashed bg-[url('{{ asset($event->image) }}')] bg-cover bg-center bg-no-repeat flex flex-col justify-end relative rounded-xl">
                        <div class="absolute w-full h-full bg-magenta bg-opacity-40 rounded-lg"></div>
                    </div>

                    <div class="z-[10] absolute top-0 left-0 translate-x-[-5%] translate-y-[10%] flex flex-col items-start gap-2">

                        <x-dashboard.info name="title" :value="$event->title" />
                        <x-dashboard.info name="seats" :value="$event->seats"/>
                        <x-dashboard.info name="remaining" :value="$event->remainingSeats()"/>
                        {{--                        <p class="">{{ substr($event->description, 0, 50) . '...' }}</p>--}}
                    </div>

                    <!-- STATUS -->
                    <h1 class="absolute right-0 top-0 translate-x-[25%] translate-y-[50%] bg-white px-8 py-2 rotate-[45deg] border-b-2 border-black border-dashed">{{ $event->validated_at ? 'Approved' : ($event->deleted_at ? 'Rejected' : 'Pending') }}</h1>

                    @if( ! $event->deleted_at)
                    @if( ! $event->validated_at)

                    <!-- ACTIONS -->
                    <div class="flex flex-col items-center text-black absolute top-0 right-[-25px]">
                        <a href="{{ route('event.edit', $event->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                        <form method="POST" action="{{ route('event.delete', $event->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </button>

                        </form>

                    </div>
                    @endif

                    <!-- TOGGLE -->
                    <div class="flex flex-col items-center text-black absolute bottom-0 right-0 p-4 z-[10]">
                        <form method="POST" action="{{ route('event.change-status', $event->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="flex items-center">
                                <img src="{{ asset('images/selection.gif') }}" alt="" class="w-8">
                                <p class="text-white">{{$event->auto ? 'MANUAL' : 'AUTO'}}</p>
                            </div>
                            <button type="submit" class="flex items-center">
                                <div class="w-8"></div>
                                <p class="rounded-full text-neutral-400">{{$event->auto ? 'AUTO' : 'MANUAL'}}</p>
                            </button>

                        </form>
                    </div>
                    @endif
                    <a href="{{ $event->validated_at ? route('event.reservations', $event->id) : '#' }}" class="absolute w-full h-full z-[5]"></a>
                </div>
            @endforeach
            @endif
            <div class="w-full lg:w-[25rem] h-[20rem] border-2 border-black rounded-lg flex justify-center items-center">
                <button onclick="showForm('event')" class="text-2xl w-full h-full">+</button>
            </div>
        </section>
    </div>




    @push('scripts')
        <script src="{{ asset('/js/register.js') }}"></script>
    @endpush
    <x-slot name="overlay">
        <x-form.layout role="event" :route="isset($edit) ? route('event.update', $selectedEvent->id) : route('event.store')" type="{{ isset($edit) ? 'PUT' : '' }}" class="{{ isset($edit) ? 'z-[50] opacity-[1]' : '' }}">

            <x-form.input value="{{ $selectedEvent->title ?? '' }}" name="title"/>
            <x-form.input value="{{ $selectedEvent->seats ?? '' }}" name="seats" type="number"/>
            <x-form.input value="{{ $selectedEvent->venue ?? '' }}" name="venue"/>
            <x-form.input value="{{ $selectedEvent->price ?? '' }}" name="price" type="number"  step="0.01"/>
            <x-form.input value="{{ $selectedEvent->date ?? '' }}" name="date" type="datetime-local" min="{{ now()->timezone('Africa/Casablanca')->format('Y-m-d\TH:i') }}" max="{{ now()->timezone('Africa/Casablanca')->addMonths(24)->format('Y-m-d\TH:i') }}"/>

            <x-form.input-layout>
                <x-form.label name="category"/>

                <div class="input-duplicate flex items-center gap-2">
                    <select name="category_id" class="w-64 h-10 p-2 border-2 border-black rounded">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ (isset($selectedEvent->category_id) && $selectedEvent->category_id == $category->id) ? 'selected' : ''}}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </x-form.input-layout>

            <x-form.input value="{{ $selectedEvent->description ?? '' }}" name="description" :textarea="true"/>
            <x-form.image-input name="image" :image="$selectedEvent->image ?? '' "/>

        </x-form.layout>

        <div id="overlay" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] h-full w-full bg-black z-[-50] transition-all {{ isset($edit) ? 'z-[25] opacity-[0.8]' : 'opacity-[0]' }}"></div>
    </x-slot>
</x-dashboard.layout>
