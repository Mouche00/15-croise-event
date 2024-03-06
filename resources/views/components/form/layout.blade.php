@props(['role'])

<form action="{{ route('register.store', $role) }}" method="POST" id="{{ $role }}-form" class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] bg-white rounded-lg opacity-[0] z-[-50] transition-all" enctype="multipart/form-data">
    @csrf

    <h1 class="mb-4 text-center p-4 w-full bg-main rounded-t-lg text-3xl font-black text-white">{{ strtoupper($role) }} SIGN-UP</h1>
    <div class="p-10 grid grid-cols-2 items-start items-center justify-center gap-y-8 gap-x-20">

        {{ $slot }}

        <x-form.button />
    </div>
</form>
