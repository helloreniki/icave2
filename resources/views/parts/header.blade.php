@php
//  dump($gumb->value()[0]['tekst']);
//   echo('new line');
//  dd($page->gumb[0]);
// dd($text_color->value()->value());
@endphp
@include('parts.menu')

<div class="w-full relative z-0 @if(! $slika_ozadja) bg-{{$bg_color->value() }} @endif">

  <div class="relative z-10 py-32 sm:py-60 px-16 text-center">
    <div id="nadnaslov" class="will-change-transform font-special text-2xl xs:text-3xl sm:text-5xl text-gold">{{ $nadnaslov }}</div>
    <div id="naslov" class="will-change-transform text-4xl xs:text-6xl sm:text-8xl font-extrabold text-{{ $text_color->value()->value() }} tracking-widest mb-12 mt-4 sm:mt-6">{{ $naslov }}</div>
    <div id="podnaslov" class="will-change-transform text-md sm:text-xl font-semibold text-{{ $text_color->value()->value() }} tracking-widest">{{ $podnaslov }}</div>
    @if($gumb->value())
    <x-button id="gumb" class="mt-24 sm:mt-32"><a href="#danasnja-ponudba" >{{ $gumb->value()[0]['tekst'] }}</a></x-button>
    {{-- @dd($gumb->value()[0]['tekst']->value())) --}}
    @endif
  </div>

  @if($slika_ozadja)
  <div class="inset-0 absolute">
    <img src="{{ statamic_image($slika_ozadja, ['w' => 1200]) }}" alt="" class="w-full h-full object-cover">
    <div class="inset-0 absolute bg-gray-900/80 mix-blend-multiply"></div>
  </div>
  @endif

</div>

<script>

  let tl_h = gsap.timeline({
    scrollTrigger: {
      trigger:"#naslov",
      markers: false,
      toggleActions: "restart complete none none"
    },
    defaults: {
      opacity:0,
      ease:"power2.out"

    }
  })

    tl_h.from("#naslov", { duration:1, y:-50, scale:0.8, ease:"power1.out"}, 0.5)
        .from("#nadnaslov", {duration:2, y:20}, "-=0.5")
        .from("#podnaslov", {duration:1, y:-40}, "-=1.5")


    // var gumbek = gsap.to("rob", {duration:3, scaleX:3})
    // document.getELementById('gumb').onclick = () => gumbek.play();

  </script>
