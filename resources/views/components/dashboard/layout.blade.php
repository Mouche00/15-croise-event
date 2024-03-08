@props(['links', 'role'])

<x-layout class="dashboard h-[100vh] bg-neutral-800">
    <section class="flex gap-4 h-full p-8">
        <x-dashboard.sidebar :links="$links" :role="$role"/>
        <main class="w-full flex flex-col gap-8">
            <x-dashboard.navbar :role="$role"/>

            <div class="bg-white rounded border-4 border-dashed border-black p-8">
                {{ $slot }}
            </div>
        </main>
    </section>

    @push('scripts')
        <script src="/js/dashboard.js"></script>
    @endpush
</x-layout>
