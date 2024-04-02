@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-600 dark:text-gray-300 font-bold uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
