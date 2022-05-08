<div x-data="{ openModal: true }"
  x-init="setTimeout(() => openModal = false, 4000)"
  x-show="openModal"
  class="fixed inset-0 z-50 bg-gray-800/75"
  >

  <div class="my-16 bg-beige text-gold py-3 px-6 text-xl tracking-wide border border-gold flex items-center">
    <svg class="h-6 w-6 text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <p class="flex-1 ml-2">{{ session('success') }}</p>
  </div>

</div>