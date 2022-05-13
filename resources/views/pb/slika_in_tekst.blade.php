@php

@endphp

<div class="max-w-7xl mx-auto px-8 bg-{{$block['barva_ozadja']}}
    {{-- false = false case  --}}
    @if($barva_ozadja_current == $barva_ozadja_previous) pt-8 md:pt-16 @else pt-16 md:pt-32 @endif
    @if($barva_ozadja_current == $barva_ozadja_next) pb-8 md:pb-16 @else pb-16 md:pb-32 @endif
">
  <div id="" class="blokec md:grid md:grid-cols-2 md:gap-10 lg:gap-24 lg:px-12 px-5 overflow-x-hidden">
    @if($block['swap'] == true)
      <div id="levo" class="will-change-transform relative h-40 xs:h-52 sm:h-64 md:h-auto mb-10 sm:mb-16 md:mb-0 xs:mx-12 sm:mx-20 md:mx-0">@include('pb.swap.image')</div>
      <div id="desno" class="will-change-transform">@include('pb.swap.text')</div>
    @elseif($block['swap'] == false)
      <div id="levo" class="will-change-transform">@include('pb.swap.text')</div>
      <div id="desno" class="will-change-transform relative h-40 xs:h-52 sm:h-64 md:h-auto mt-10 sm:mt-16 md:mt-0 xs:mx-12 sm:mx-20 md:mx-0">@include('pb.swap.image')</div>
    @endif
  </div>
</div>

<script>

  gsap.registerPlugin(ScrollTrigger)

  gsap.set('.blokec', {opacity:0});

  gsap.utils.toArray(".blokec").forEach(box => {
    let leva = box.querySelector('#levo')
    let desna = box.querySelector('#desno')
    gsap.set(leva, {x:"-10vh", opacity:0})
    gsap.set(desna, {x:"10vh", opacity:0})

    tl_blokec = gsap.timeline({
      scrollTrigger: {
        trigger: box,
        markers: false,
        toggleActions: "restart none none none"
      }
     });


    tl_blokec.to(box, {duration:1.5, opacity:1, ease:'power.in'});
    tl_blokec.to(leva, {duration:1.5, x:0, opacity:1, ease:"power.in"}, "<");
    tl_blokec.to(desna, {duration:1.5, x:0, opacity:1 }, "<");

  });

</script>
