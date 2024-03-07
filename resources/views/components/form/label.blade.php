@props(['name', 'color'])

<label for="{{ $name }}" class="w-fit py-2 px-4 bg-{{ $color ?? 'main' }} text-white font-black rounded">{{ ucwords(preg_replace("/[^A-Za-z0-9 ]/", '', str_replace('_', ' ', $name))) }}</label>
