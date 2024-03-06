@props(['items'])

<ul {{ $attributes->merge(['class' => "flex gap-16"]) }}>
    @foreach(unserialize($items) as $item)
        <x-navbar.list-item :name="$item" />
    @endforeach
</ul>
