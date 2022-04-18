@php
//  dump($gumb->value()[0]['tekst']);
//   echo('new line');
//  dd($page->gumb[0]);
// dd($text_color->value()->value());
@endphp
@include('parts.menu')

<div class="w-full relative z-0 @if(! $slika_ozadja) bg-{{$bg_color->value() }} @endif">

  <div class="relative z-10 py-32 sm:py-60 px-16 text-center">
    <div id="nadnaslov" class="font-special text-2xl xs:text-3xl sm:text-5xl text-gold">{{ $nadnaslov }}</div>
    <div id="naslov" class="text-4xl xs:text-6xl sm:text-8xl font-extrabold text-{{ $text_color->value()->value() }} tracking-widest mb-12 mt-4 sm:mt-6">{{ $naslov }}</div>
    <div id="podnaslov" class="text-md sm:text-xl font-semibold text-{{ $text_color->value()->value() }} tracking-widest">{{ $podnaslov }}</div>
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
