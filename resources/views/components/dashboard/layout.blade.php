@props(['links', 'role'])

<x-layout class="dashboard lg:h-[100vh] bg-neutral-800">
    <section class="flex flex-col lg:flex-row items-start gap-4 h-full p-8">
        <x-dashboard.sidebar :role="$role"/>
        <main class="w-full flex flex-col items-center gap-8">
            <x-dashboard.navbar :role="$role" :links="$links"/>

            <div class="bg-white rounded border-4 border-dashed border-black p-8 lg:rotate-[1deg] mt-10 w-full lg:w-fit p-8">
                {{ $slot }}
            </div>
        </main>
    </section>

    {{ $overlay ?? '' }}

    @push('scripts')
        <script src="{{ asset('/js/dashboard.js') }}"></script>
    @endpush
</x-layout>
