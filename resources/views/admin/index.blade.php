<x-dashboard.layout :links="$links" :role="$role">

    <div class="flex flex-wrap gap-4">
        <div class="p-8 border-black border-2 flex justify-center items-center rounded">
            <p>Events: {{ $events }}</p>
        </div>

        <div class="p-8 border-black border-2 flex justify-center items-center rounded">
            <p>Reservations: {{ $reservations }}</p>
        </div>

        <div class="p-8 border-black border-2 flex justify-center items-center rounded">
            <p>Users: {{ $users }}</p>
        </div>
    </div>
</x-dashboard.layout>
