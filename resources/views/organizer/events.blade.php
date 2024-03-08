<x-dashboard.layout :links="$links" :role="$role">

    <div class="w-full">
        <section class="grid grid-cols-3 items-start gap-12">
            @if($events->first())
            @foreach($events as $event)
                <div class="rounded-lg flex flex-col relative shadow-md">
                    <div class="h-64 border-2 border-black bg-[url('{{ $event->image ? asset('storage/' . $event->image) : asset('images/logo.png') }}')] bg-cover bg-center bg-no-repeat rounded-t-lg relative">
{{--                        <div class="absolute w-full h-full bg-magenta bg-opacity-70 rounded-t-lg "></div>--}}
                    </div>

                    <div class="flex justify-center items-center bg-black text-white rounded-b-lg p-4 gap-4">
                        <h1 class="text-2xl font-black w-[45%]">{{ $event->title }}</h1>
{{--                        <p class="">{{ substr($event->description, 0, 50) . '...' }}</p>--}}
                    </div>

                    <!-- STATUS -->
                    <h1 class="absolute right-0 top-0 translate-x-[25%] translate-y-[50%] bg-magenta px-4 py-2 rotate-[45deg]">{{ $event->validated_at ? 'Approved' : 'Pending' }}</h1>

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

                    <!-- TOGGLE -->
                    <div class="flex flex-col items-center text-black absolute top-0 left-0 translate-x-[-50%] translate-y-[-50%]">
                        <form method="POST" action="{{ route('event.change-status', $event->id) }}">
                            @csrf
                            @method('PUT')

                            <button type="submit" class="w-8 h-8 rounded-full bg-{{$event->auto ? 'green-400' : 'red-400'}}"></button>

                        </form>
                    </div>
                    @endif
                </div>
            @endforeach
            @endif
            <div class="h-64 border-2 border-black rounded-lg">
                <button onclick="showForm('event')" class="w-full h-full text-2xl">+</button>
            </div>
        </section>
    </div>

    <x-form.layout role="event" :route="isset($edit) ? route('event.update', $selectedEvent->id) : route('event.store')" type="{{ isset($edit) ? 'PUT' : '' }}" class="{{ isset($edit) ? 'z-[50] opacity-[1]' : '' }}">

        <x-form.input value="{{ $selectedEvent->title ?? '' }}" name="title"/>
        <x-form.input value="{{ $selectedEvent->places ?? '' }}" name="places" type="number"/>
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

    @push('scripts')
        <script src="{{ asset('/js/register.js') }}"></script>
    @endpush
</x-dashboard.layout>
