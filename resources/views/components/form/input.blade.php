<div class="flex flex-col text-lg space-y-2">

  <x-form.label :name="$name" :label="$label" />

  <input
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}"
    @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
    {{ $attributes->merge(['class' => "border border-gold px-4 py-2 focus:outline-none text-gray-900" ]) }}
  >
  <x-form.error :name="$name" />
</div>
