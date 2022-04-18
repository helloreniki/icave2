@php
  // $item['velikost_slike'] // col-span-2, row-span-2, ''
@endphp
<div class="grid grid-cols-3 gap-2 grid-flow-row-dense my-2">
  @foreach ($block['slike'] as $item)
  {{-- @dd($item) --}}
  <div class="slika-mixed overflow-hidden {{$item['velikost_slike']}}">
    <img src="{{statamic_image($item['slika'], ['w' => 1200, 'h' => 600] )}}" alt="" class="object-cover w-full h-full hover:scale-105 transition duration-800 ease-in-out  ">
  </div>
  @endforeach

</div>
