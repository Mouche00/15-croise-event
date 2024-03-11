<x-dashboard.layout :links="$links" :role="$role">
    @if($events->first())
    <x-table.layout>
        <x-slot name="head">
            <x-table.head :cells="['ID', 'title', 'organizer', 'category', 'description', 'seats', 'price', 'date']" />
        </x-slot>

        @foreach($events as $event)
            <tr class="text-center">
                <x-table.cell>
                    {{ $event->id }}
                </x-table.cell>
                <x-table.cell>
                    {{ $event->title }}
                </x-table.cell>
                <x-table.cell>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset($event->organizer->image) }}" alt="" class="rounded-full shadow-md w-16">
                        <p>{{ $event->organizer->name }}</p>
                    </div>
                </x-table.cell>
                <x-table.cell>
                    {{ $event->category->name }}
                </x-table.cell>
                <x-table.cell>
                    {{ substr($event->description, 0, 20) . '...' }}
                </x-table.cell>
                <x-table.cell>
                    {{ $event->seats }}
                </x-table.cell>
                <x-table.cell>
                    {{ $event->price }}
                </x-table.cell>

                <x-table.cell>
                    {{ $event->date }}
                </x-table.cell>

                <x-table.cell class="">
                    @if($event->date > now()->toDateTimeString())
                        @if( ! $event->validated_at)
                            <form action="{{ route('event.approve', $event->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <button type="SUBMIT">
                                    <svg class="w-8 h-8"
                                         fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 173.309 173.309" xml:space="preserve"><g id="SVGRepo_bgCarrier"
                                                                                               stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M173.295,59.534c-0.001-4.142-3.358-7.499-7.5-7.499h-57.784l8.781-34.368c0.573-2.244,0.077-4.627-1.343-6.457 c-1.421-1.83-3.607-2.9-5.924-2.9H74.73c-3.427,0-6.417,2.322-7.266,5.642l-9.735,38.06L7.497,52.036 C3.355,52.038,0,55.395,0,59.536v83.849c0,4.142,3.357,7.5,7.5,7.5h40.154l26.668,13.322c1.041,0.52,2.188,0.791,3.351,0.791h78.951 c4.143,0,7.5-3.358,7.5-7.5V140.51h1.684c1.989,0,3.898-0.791,5.304-2.197c1.406-1.407,2.196-3.315,2.196-5.304L173.295,59.534z M123.727,125.51c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.398v9.487H79.443l-26.668-13.322 c-1.041-0.52-2.188-0.79-3.352-0.79H15V67.032l48.556-0.022c3.426-0.002,6.414-2.323,7.263-5.642l9.735-38.058h19.314l-8.781,34.368 c-0.573,2.244-0.077,4.627,1.343,6.456c1.421,1.83,3.607,2.9,5.924,2.9h59.942l0.002,9.473H123.74c-4.142,0-7.5,3.358-7.5,7.5 s3.358,7.5,7.5,7.5h34.561l0.002,9.503H123.74c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h34.565l0.002,9.499H123.727z"></path>
                                        </g></svg>
                                </button>
                            </form>
                        @endif

                        @if( ! $event->deleted_at)
                            <form action="{{ route('event.reject', $event->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    <svg class="w-8 h-8"
                                         fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 173.309 173.309" xml:space="preserve"><g id="SVGRepo_bgCarrier"
                                                                                               stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M165.809,22.424h-40.154L98.986,9.102c-1.041-0.52-2.188-0.791-3.351-0.791H16.684c-4.143,0-7.5,3.358-7.5,7.5v16.987H7.5 c-1.989,0-3.898,0.791-5.304,2.197C0.79,36.402,0,38.311,0,40.3l0.014,73.475c0.001,4.142,3.358,7.499,7.5,7.499h57.784 l-8.781,34.368c-0.573,2.244-0.077,4.628,1.343,6.457c1.421,1.829,3.607,2.9,5.924,2.9h34.795c3.427,0,6.417-2.322,7.266-5.642 l9.735-38.06l50.232-0.023c4.142-0.002,7.497-3.359,7.497-7.5V29.924C173.309,25.782,169.951,22.424,165.809,22.424z M158.309,106.276l-48.556,0.022c-3.426,0.001-6.414,2.323-7.263,5.642l-9.735,38.058H73.44l8.781-34.368 c0.573-2.244,0.077-4.627-1.343-6.457c-1.421-1.83-3.607-2.9-5.924-2.9H15.013L15.011,96.8h34.558c4.142,0,7.5-3.358,7.5-7.5 s-3.358-7.5-7.5-7.5H15.008l-0.002-9.503h34.563c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5H15.003l-0.002-9.499h34.581 c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5H24.184v-9.487h69.682l26.668,13.322c1.041,0.52,2.188,0.791,3.352,0.791 h34.424V106.276z"></path>
                                        </g></svg>
                                </button>
                            </form>
                        @endif
                    @else
                        <p>No actions available.</p>
                    @endif
                </x-table.cell>
            </tr>
        @endforeach
    </x-table.layout>

    @else
        <h1>No new events</h1>
    @endif
    <div class="mt-8">
        {{ $events->links() }}
    </div>
</x-dashboard.layout>
