@props(['name', 'value'])

<div class="border-black grid grid-cols-2 border-2 border-dashed">

    <h1 class="text-xs font-black text-center text-white bg-black py-2 px-4">{{ ucwords($name) }}</h1>
    <h1 class="text-xs font-black text-center text-black bg-white py-2 px-4">{{ $value }}</h1>
</div>
