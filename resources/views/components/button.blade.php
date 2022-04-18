<button {{ $attributes->merge(['class' => 'text-sm xs:text-base relative px-6 py-3 bg-gold text-white tracking-wider transition hover:bg-white hover:text-gold hover:border hover:border-gold duration-500 ease-in-out'])}}>
  <span id="rob" class="absolute top-0 right-0 border-t-2 border-r-2 border-gold w-8 h-8 -mt-3 -mr-3 "></span>
  {{ $slot }}
  <span class="absolute bottom-0 left-0 border-b-2 border-l-2 border-gold w-8 h-8 -mb-3 -ml-3"></span>
</button>
