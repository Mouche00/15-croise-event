@props(['role'])

<div class="h-20 rounded-lg flex justify-end items-center gap-4 text-white">
    <h1 class="bg-magenta border-white border-dashed border-4 h-full px-8 rounded-lg flex justify-center items-center text-3xl">
        {{ ucwords($role) }}
    </h1>
{{--    <div class="bg-magenta border-white border-dashed border-4  h-full w-full rounded-lg flex justify-between items-center p-4 px-8">--}}
{{--        <input class="h-8 w-64 rounded">--}}

{{--        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="" class="rounded-full">--}}
{{--    </div>--}}
</div>
