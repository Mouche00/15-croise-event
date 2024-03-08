
@if($textarea ?? false)
    <textarea name="{{ $name }}" id="{{ $name }}" rows="4" placeholder="Type something here..." class=" p-2 border-2 border-main rounded shadow-md w-64">{{ $value ?? old($name) }}</textarea>
@else
    <x-form.input-element-content :name="$name" :type="$type ?? 'text'" :textarea="$textarea ?? false" :bulk="$bulk ?? 'hidden'" :value="$value ?? old($name)" :min="$min" :max="$max" :step="$step"/>
@endif
