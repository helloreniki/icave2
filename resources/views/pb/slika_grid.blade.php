@php
    // dd($block['slike']);
@endphp

{{-- purge: gap-12 gap-16 gap-24 row-span-3 col-span-2 grid-cols-4 grid-cols-5 grid-cols-3 grid-cols-2 md:grid-cols-4 md:grid-cols-3 my-4 my-8 my-12--}}

  <div class="grid grid-cols-2 md:grid-cols-{{$block['stolpci']}} gap-{{$block['gap']}} grid-flow-row {{$block['sirina'] == 'container' ? 'max-w-7xl mx-auto' : ''}} my-{{$block['gap']}}">
    @foreach ($block['slike'] as $slika)
      @php]
          // dd($slika);
      @endphp

      <div class="slika-{{$type_counter}} will-change-transform overflow-hidden ">
        <img src="{{statamic_image($slika, ['w' => 1200, 'h' => 600] )}}" alt="" class="hover:scale-105 transition duration-800 ease-in-out  ">
      </div>

    @endforeach
  </div>

  <script>
    gsap.from(".slika-{{$type_counter}}", {
        duration: {{ sizeof($block['slike']) * 0.33 }},
        opacity:0.25,
        ease:"power.out",
        stagger:0.05,
        scrollTrigger:{
          trigger:".slika-{{$type_counter}}",
          markers: true,
          toggleActions: "restart none none none"
        }
      })

  //ce vec istih blokcev na strani, put them in arr
  // gsap.set('.slika', {opacity:0.25})
  // gsap.utils.toArray(".slika").forEach(el => {
  //   let tl_grid = gsap.timeline({
  //     scrollTrigger: {
  //       trigger: el,
  //       markers: false,
  //       toggleActions: "restart none none none"
  //     },
  //     defaults: {

  //     }
  //   })

  //   tl_grid.to(el, {opacity:1, duration:{{ sizeof($block['slike']) * 0.33 }} });

  // });


  </script>
