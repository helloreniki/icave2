@php
    // dump($item->slika)
    // @dump($block->poravnava_vsebine)
@endphp

<div class="w-full lg:w-3/4 my-12 shadow-md mx-auto">
  <img src="{{ statamic_image($item->slika, ['w' => 1200, 'h' => 700]) }}" alt="" class="w-full h-full object-cover object-center ">
</div>
