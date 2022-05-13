@php
  // $umakni_padding_zgoraj = $barva_ozadja_current == $barva_ozadja_previous;
  // $umakni_padding_spodaj = $barva_ozadja_current == $barva_ozadja_next
@endphp

<div class="
  block-tekst px-12 bg-{{$block->barva_ozadja}}
  prose prose-md md:prose-xl lg:prose-2xl text-center max-w-7xl mx-auto prose-a:text-gold prose-strong:text-gold
  @if($barva_ozadja_current == $barva_ozadja_previous) pt-8 md:pt-16 @else pt-16 md:pt-32 @endif
  @if($barva_ozadja_current == $barva_ozadja_next) pb-8 md:pb-16 @else pb-16 md:pb-32 @endif
">
  @foreach ($block->vsebina as $item)
    {{-- @dump($item->text) --}}
    @include('pb.tekst.' . $item->type)
  @endforeach
</div>

<style>
  /* @if($barva_ozadja_current == $barva_ozadja_previous)
  .block-tekst :first-child {
    margin-top: 0;
  }
  @endif */
</style>

{{-- != ['novice', slika_mixed, slika_grid] --}}
