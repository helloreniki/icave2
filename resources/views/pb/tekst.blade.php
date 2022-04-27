@php
    // dd($block->vsebina)
@endphp

<div class="max-w-7xl mx-auto py-16 md:py-32 px-12 text-center bg-{{$block->barva_ozadja}} prose prose-md md:prose-xl prose-a:text-gold prose-strong:text-gold">
  @foreach ($block->vsebina as $item)
    {{-- @dump($item->text) --}}
    @include('pb.tekst.' . $item->type)
  @endforeach
</div>
