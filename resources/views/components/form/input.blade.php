@props(['name', 'type', 'textarea', 'bulk', 'value', 'min', 'max', 'step'])

<x-form.input-layout>

    <x-form.label :name="$name"/>
    <x-form.input-element :name="$name" :type="$type ?? 'text'" :textarea="$textarea ?? false" :bulk="$bulk ?? 'hidden'" :value="$value ?? old($name)" :min="$min ?? ''" :max="$max ?? ''" :step="$step ?? ''"/>
    @if($errors->first($name))
        <p class="text-xs text-red-500 w-64">{{ $errors->first($name) }}</p>
    @endif
</x-form.input-layout>
