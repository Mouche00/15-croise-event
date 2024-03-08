<x-dashboard.layout :links="$links" :role="$role">
    @if($events->first())
    <table class="w-full border-separate border-spacing-2">
        <thead>
        <tr>
            <th class="bg-black text-white py-2 px-4 rounded-lg">ID</th>
            <th class="bg-black text-white py-2 px-4 rounded-lg">Title</th>
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
                        {{ substr($event->description, 0, 30) . '...' }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->places }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        {{ $event->price }}
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg flex justify-evenly">

                        <form action="{{ route('event.approve', $event->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button type="SUBMIT">APPROVE</button>
                        </form>
                        <form action="{{ route('event.reject', $event->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">REJECT</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    @else
        <h1>No new events</h1>
    @endif
</x-dashboard.layout>
