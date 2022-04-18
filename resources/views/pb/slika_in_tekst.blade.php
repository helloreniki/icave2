@php
    // dd($block['swap']);
@endphp

<div class=" py-16 md:py-32 px-8 bg-{{$block['barva_ozadja']}} max-w-7xl mx-auto">
  <div id="" class="blokec md:grid md:grid-cols-2 md:gap-10 lg:gap-24 lg:px-12 px-5 overflow-x-hidden">
    @if($block['swap'] == true)
      <div id="levo" class="relative h-40 xs:h-52 sm:h-64 md:h-auto mb-10 sm:mb-16 md:mb-0 xs:mx-12 sm:mx-20 md:mx-0">@include('pb.swap.image')</div>
      <div id="desno" class="">@include('pb.swap.text')</div>
    @elseif($block['swap'] == false)
      <div id="levo">@include('pb.swap.text')</div>
      <div id="desno" class="relative h-40 xs:h-52 sm:h-64 md:h-auto mt-10 sm:mt-16 md:mt-0 xs:mx-12 sm:mx-20 md:mx-0">@include('pb.swap.image')</div>
    @endif
  </div>
</div>
