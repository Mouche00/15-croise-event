<x-dashboard.layout :links="$links" :role="$role">

    <div class="w-full">
        <section class="grid grid-cols-3 items-start gap-12">
            @if($events->first())
            @foreach($events as $event)
                <div class="rounded-lg flex flex-col relative">
                    <div class="h-64 border-2 border-black bg-[url('{{ $event->image ? asset('storage/' . $event->image) : asset('images/logo.png') }}')] bg-cover bg-center bg-no-repeat rounded-t-lg relative">
{{--                        <div class="absolute w-full h-full bg-magenta bg-opacity-70 rounded-t-lg "></div>--}}
                    </div>

                    <div class="flex justify-center items-center bg-black text-white rounded-b-lg p-4 gap-4">
                        <h1 class="text-2xl font-black w-[45%]">{{ $event->title }}</h1>
{{--                        <p class="">{{ substr($event->description, 0, 50) . '...' }}</p>--}}
                    </div>

                    <h1 class="absolute right-0 top-0 translate-x-[25%] translate-y-[50%] bg-magenta px-4 py-2 rotate-[45deg]">{{ $event->validated_at ? 'Approved' : 'Pending' }}</h1>
                </div>
            @endforeach
            @endif
            <div class="h-64 border-2 border-black rounded-lg">
                <button onclick="showForm('event')" class="w-full h-full text-2xl">+</button>
            </div>
        </section>
    </div>

    <x-form.layout role="event" :route="route('event.store')">

        <x-form.input name="title"/>
        <x-form.input name="description" :textarea="true"/>
        <x-form.input name="places" type="number"/>
        <x-form.input name="price" type="number"/>

        <x-form.input-layout>
            <x-form.label name="category"/>

            <div class="input-duplicate flex items-center gap-2">
                <select name="category_id" class="w-64 h-10 p-2">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
            </div>
        </x-form.input-layout>

        <x-form.image-input name="image" />

    </x-form.layout>

    <div id="overlay" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] h-full w-full bg-black opacity-[0] z-[-50] transition-all"></div>

    @push('scripts')
        <script src="{{ asset('/js/register.js') }}"></script>
    @endpush
</x-dashboard.layout>
