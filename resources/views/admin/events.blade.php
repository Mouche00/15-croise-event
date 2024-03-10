<x-dashboard.layout :links="$links" :role="$role">
    @if($events->first())
    <table class="w-full border-separate border-spacing-2">
        <thead>
        <tr>
            <th class="bg-black text-white py-2 px-4 rounded-lg">ID</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Title</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Organizer</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Category</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Description</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Seats</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Price</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Actions</th>
        </tr>
        </thead>
        <tbody>

            @foreach($events as $event)
                <tr class="text-center">
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->id }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->title }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        <div class="flex flex-col items-start">
                            <img src="{{ 'storage/' . $event->organizer->image }}" alt="" class="rounded-full shadow-md">
                            <p>{{ $event->organizer->name }}</p>
                        </div>
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->category->name }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ substr($event->description, 0, 30) . '...' }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->seats }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->price }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg flex justify-evenly">
                    @if($event->date < now()->toDateTimeString())
                        @if( ! $event->validated_at)
                        <form action="{{ route('event.approve', $event->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button type="SUBMIT">APPROVE</button>
                        </form>
                        @endif

                        @if( ! $event->deleted_at)
                        <form action="{{ route('event.reject', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">REJECT</button>
                        </form>
                        @endif
                    @else
                        <p>No actions available.</p>
                    @endif
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    @else
        <h1>No new events</h1>
    @endif
</x-dashboard.layout>
