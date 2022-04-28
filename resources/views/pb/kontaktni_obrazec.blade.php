<div class="bg-gray-900/90 py-24 ">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col text-beige">
      <h2 class="text-4xl font-special text-gold">Imate vprasanje?</h2>
      <h2 class="text-4xl mt-4 mb-10">Kontaktirajte nas</h2>
      <p class="text-lg max-w-2xl">Imate vprašanje ali potrebujete pomoč z naročilom? Pošljite nam sporočilo. Izpolnite obrazec in potrudili se bomo s čim hitrejšim odgovorom. </p>
    </div>

    <form action="{{ url('/') }}/submitmyform" method="post" class="max-w-lg my-12">
      @csrf

      <div class="flex flex-col space-y-6 text-beige">
        <x-form.input type="text" name="name" label="Vase ime:" />
        <x-form.input type="text" name="email" label="Vas email:" />
        <x-form.textarea name="content" label="Vase sporocilo:"></x-form.textarea>
      </div>

      <x-button type="submit" class="w-full my-12 ">Poslji sporocilo</x-button>

      @if (session()->has('success'))
       <x-success-message />
      @endif

    </form>
  </div>
</div>
