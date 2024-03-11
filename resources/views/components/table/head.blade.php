@props(['cells'])

<tr>
    @if($cells ?? false)
        @foreach($cells as $cell)
            <x-table.head-cell>{{ ucwords($cell) }}</x-table.head-cell>
        @endforeach
    @endif
        <x-table.head-cell>Actions</x-table.head-cell>
    {{ $slot }}
</tr>
