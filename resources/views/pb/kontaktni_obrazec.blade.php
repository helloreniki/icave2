<div class="bg-gray-900/90 py-24 ">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col text-white">
      <h2 class="text-4xl font-special text-gold">Imate vprasanje?</h2>
      <h2 class="text-4xl mt-4 mb-10">Kontaktirajte nas</h2>
      <p class="text-lg">Imate vprašanje ali potrebujete pomoč z naročilom? Pošljite nam sporočilo. Izpolnite obrazec in potrudili se bomo s čim hitrejšim odgovorom. </p>
    </div>

    <form action="{{ url('/') }}/submitmyform" method="post" class="max-w-lg my-12">
      @csrf

      <div class="flex flex-col space-y-4">
        <div class="flex flex-col text-lg space-y-2">
          <label for="name" class="text-white">Vase ime:</label>
          <input type="text" name="name" id="name" class="border border-gold">
          @error('name')<p class="text-gold text-xs">{{$message}}</p>@enderror
        </div>
        <div class="flex flex-col text-lg space-y-2">
          <label for="email" class="text-white">Vas email:</label>
          <input type="text" name="email" id="email" class="border border-gold">
          @error('email')<p class="text-gold text-xs">{{$message}}</p>@enderror
        </div>
        <div class="flex flex-col text-lg space-y-2">
          <label for="content" class="text-white">Vase sporocilo:</label>
          <textarea name="content" id="content" class="border border-gold" rows="10"></textarea>
          @error('content')<p class="text-gold text-xs">{{$message}}</p>@enderror
        </div>
      </div>

      <x-button type="submit" class="w-full my-12 ">Poslji sporocilo</x-button>

      @if (session()->has('success'))
        <div x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            class="fixed bottom-8 right-8 bg-beige text-gold py-3 px-6 text-xl tracking-wide border border-gold"
        >
            <p class="">{{ session('success') }}</p>
        </div>
      @endif

    </form>
  </div>
</div>
