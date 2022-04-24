<div id="tekst" class="flex flex-col items-center px-0 md:px-4 space-y-2 md:space-y-4 text-center md:my-8">
  <div class="text-gold text-xl sm:text-2xl lg:text-4xl sm:mb-4 lg:mb-6">{{ $block['naslov'] }}</div>
  <div class="@if($block['barva_ozadja']->value() == 'gray-900/90') text-gold @endif">
    @if($block['podnaslov'])<div class="text-sm sm:text-lg lg:text-2xl font-semibold mt-2 mb-6">{{ $block['podnaslov'] }}</div>@endif
    @if($block['tekst'])<div class="text-sm lg:text-xl my-2">{{ $block['tekst'] }}</div>@endif
    @if($block['alineje'])
      @foreach($block['alineje'] as $alineja)
        <div class="">{{ $alineja }}</div>
      @endforeach
    @endif
    @if($block['markdown'])<div class="text-sm lg:text-lg my-4">{!! $block['markdown'] !!}</div>@endif
  </div>
</div>
