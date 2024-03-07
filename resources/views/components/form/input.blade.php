@props(['name', 'type', 'textarea', 'bulk', 'value'])

<x-form.input-layout>
    <x-form.label :name="$name"/>
    <x-form.input-element :name="$name" :type="$type ?? 'text'" :textarea="$textarea ?? false" :bulk="$bulk ?? 'hidden'" :value="$value ?? old($name)"/>
    @if($errors->first($name))
        <p class="text-xs text-red-500">{{ $errors->first($name) }}</p>
    @endif
</x-form.input-layout>
