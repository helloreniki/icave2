<div class="relative z-0 {{ $block['sirina'] == 'container' ? 'max-w-7xl mx-auto' : ''}} py-24 px-8 text-center bg-beige {{$block['slika'] ? 'text-white' : ''}}">

  <div class="relative z-20">
    <div class="font-special text-gold text-3xl xs:text-4xl sm:text-5xl mb-8">Se zelite narociti na tedensko ponudbo malic?</div>
    <form action="{{ route('newsletter') }}" method="post">
      @csrf
      <div class="flex flex-col justify-center max-w-sm mx-auto text-gold">
        <x-form.input type="text" name="email" placeholder="tvoj.email@email.com" label="Vpisite svoj email naslov:" class="text-center" />
        <x-button type="submit" class="mt-8">Naroci se</x-button>
      </div>
    </form>
  </div>

  @if($block['slika'])
  <div class="absolute inset-0 z-10">
    <img src="{{statamic_image($block['slika'], ['w' => 1200, 'h' => 500] )}}" alt="" class="object-cover object-center w-full h-full ">
    <div class="bg-gray-900/90 mix-blend-multiply absolute inset-0"></div>
  </div>
  @endif

  @if (session()->has('success'))
    <x-success-message />
  @endif

</div>
