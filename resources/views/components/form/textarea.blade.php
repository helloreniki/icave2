<div class="flex flex-col text-lg space-y-2">

  <x-form.label :name="$name" :label="$label" />

  <textarea
      name="{{ $name }}"
      id="{{ $name }}"
      {{ $attributes->merge(['class' => "border border-gold text-gray-900 "]) }}
      rows="10"
  >
  </textarea>
  <x-form.error :name="$name" />

</div>
