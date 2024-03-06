@props(['name', 'array'])

<x-form.input-layout>
    <x-form.label :name="$name"/>
    @foreach($array as $item)
        <x-form.input-element-content :name="$name . '[]'" :bulk="true" value="{{ $item }}"/>
    @endforeach
</x-form.input-layout>
