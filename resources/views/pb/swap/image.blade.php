@php
  //  dd($block['slika'])
@endphp

<div class="absolute inset-0 shadow-xl shadow-gray-400 overflow-hidden z-20">
  <img src="{{ statamic_image($block['slika'], ['w' => 800, 'h' => 500]) }}" alt="" class="object-cover w-full h-full transition duration-600 ease-out hover:scale-110">
</div>
