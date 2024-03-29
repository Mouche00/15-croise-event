@props(['name', 'image'])

<div class="flex flex-col gap-2 w-64">
    <x-form.label :name="$name" />
    <div id="picture-wrapper" class="h-28 border-2 border-dashed border-black flex justify-center items-center relative rounded-lg bg-cover bg-center bg-opacity-50 bg-no-repeat {{ isset($image) ? 'bg-[url(' . asset($image) . ')]' : '' }}">
        <input onchange="previewImage(event)" name="{{ $name }}" id="{{ $name }}" type="file" class="absolute w-full h-full outline-none opacity-0">
        <p class="text-lg rounded-full bg-black text-white w-8 h-8 flex items-center justify-center">+</p>
    </div>
</div>
