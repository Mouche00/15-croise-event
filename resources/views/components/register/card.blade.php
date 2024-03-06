@props(['role'])

<div {{ $attributes->merge(['class' => 'register-card lg:w-[50%] h-full bg-[url(' . asset('images/register-card.png') . ')] bg-contain bg-no-repeat bg-center transition-all hover:scale-[102%] text-black text-6xl font-black']) }}>
    <button onclick="showForm('{{ $role }}')" type="button" class="h-full w-full">
        <p>{{ ucwords($role) }}</p>
    </button>
</div>
