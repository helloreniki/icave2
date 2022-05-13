@php
  // $item['velikost_slike'] // col-span-2, row-span-2, ''
@endphp
<div class="grid grid-cols-3 gap-2 grid-flow-row-dense my-2">
  @foreach ($block['slike'] as $item)
  {{-- @dd($item) --}}
  <div class="slika-mixed-{{$block_counter}} will-change-transform overflow-hidden {{$item['velikost_slike']}}">
    <img src="{{statamic_image($item['slika'], ['w' => 1200, 'h' => 600] )}}" alt="" class="object-cover w-full h-full hover:scale-105 transition duration-800 ease-in-out  ">
  </div>
  @endforeach

</div>

<script>
  gsap.from(".slika-mixed-{{$block_counter}}", {
       duration: {{ sizeof($block['slike']) * 0.33 }},
       opacity:0.25,
       ease:"power.out",
       stagger:0.1,
       scrollTrigger:{
         trigger:".slika-mixed-{{$block_counter}}",
         markers: false,
       }
     })
 </script>
