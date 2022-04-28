<div x-data="{ show: true }"
  x-init="setTimeout(() => show = false, 4000)"
  x-show="show"
  class="fixed bottom-8 right-8 bg-beige text-gold py-3 px-6 text-xl tracking-wide border border-gold"
  >
  <p class="">{{ session('success') }}</p>
</div>
