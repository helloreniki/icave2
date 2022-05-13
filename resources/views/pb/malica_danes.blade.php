@php
  $today = \Carbon\Carbon::now();
  $malica_danes = \Statamic\Facades\Entry::query()->where('collection', 'malice')->where('date', $today)->get();
  // dd($malica_danes);
@endphp

<div id="danasnja-ponudba" class="max-w-7xl mx-auto px-8 text-center
  @if($barva_ozadja_current == $barva_ozadja_previous && !in_array($block_previous['type'], $image_blocks)) pt-8 md:pt-16 @else pt-16 md:pt-32 @endif
  @if($barva_ozadja_current == $barva_ozadja_next && !in_array($block_next['type'], $image_blocks)) pb-8 md:pb-16 @else pb-16 md:pb-32 @endif
">
  <div class="font-special text-5xl xs:text-7xl text-gold tracking-wide mb-12 sm:mb-16">Danasnja ponudba</div>
    @forelse($malica_danes as $entry)
      <div class="text-2xl sm:text-3xl font-semibold mb-16 capitalize">{{ $entry->date()->locale('sl')->dayName }}, {{ $entry->date()->format('d.m.Y') }} </div>
      <div class="block space-y-4 sm:space-y-0 mx-auto max-w-md sm:max-w-none sm:flex sm:gap-6 sm:justify-center">
        @foreach ($entry->malice_za_danes as $o)
          <div class="obrok will-change-transform flex flex-col space-y-4 border border-gold/50 shadow-sm hover:shadow-lg group pb-6 sm:w-1/3">
            @if($o['slika'])
              <div class="overflow-hidden">
                <img src="{{statamic_image($o['slika'], ['w' => 900, 'h' => 600] )}}" alt="" class="group-hover:scale-105 transition duration-800 ease-in-out border-b border-gold/50">
              </div>
            @else
              <div class="@if ($loop->even) bg-gradient-to-b @else bg-gradient-to-t @endif from-gold/30 to-white h-full border-b border-gold"></div>
            @endif
              <div class="font-semibold mb-1 group-hover:text-gold px-4 ">{{ $o['malica'] }}</div>
              <div class="flex-auto">{{ $o['cena'] }} evrov </div>
              {{-- <button>Klikni in prevzemi</button> --}}
          </div>
        @endforeach
      @empty
        <div class="text-lg sm:text-2xl leading-relaxed sm:leading-relaxed mb-4">Trenutno ni vpisanih malic. Poglejte <a href="/malice" class="uppercase cursor-pointer hover:underline text-gold">tedensko ponudbo malic</a> ali <a href="/jedilni-list" class="uppercase cursor-pointer hover:underline text-gold">jedi po narocilu.</a></div>
      @endforelse
    </div>
</div>

<script>

  gsap.from(".obrok", {
        duration:1.5,
        opacity:0,
        // scale:0.8,
        ease:"linear",
        stagger:0.2,
        scrollTrigger:{
          trigger:".obrok",
          markers: false,
          toggleActions: "restart none none none"
        }
      })

  </script>
