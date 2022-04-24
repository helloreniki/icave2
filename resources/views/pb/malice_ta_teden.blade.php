@php
  $today = Carbon\CarbonImmutable::now();
  $startOfWeek = $today->startOFWeek();
  $endOfWeek = $today->endOfWeek();
  $malice_ta_teden = \Statamic\Facades\Entry::query()->where('collection', 'malice')
      ->where('date', '>=', $startOfWeek)->where('date', '<', $endOfWeek)->orderBy('date')->get();
@endphp

<div class="max-w-7xl mx-auto py-24 px-8 text-center">
  <div class="font-special text-5xl xs:text-7xl text-gold tracking-wide mb-16">Malice ta teden</div>

      <div class="flex flex-wrap gap-6 justify-center">
        @forelse ($malice_ta_teden as $entry)
          {{-- @php dd($entry); @endphp --}}
          <div class="malica will-change-transform w-56 border border-gold/50 shadow-md hover:shadow-lg hover:bg-beige py-3 ">
            <div class="px-4 py-3 text-xl font-semibold text-gold">
              <div>{{ $entry->date()->locale('sl')->dayName }}</div>
              <div class="text-2xl">{{ $entry->date()->format('d.n.') }}</div>
              {{-- <div class="text-2xl">{{ strtolower($entry->date()->format('d. F')) }}</div> --}}
            </div>
            @foreach ($entry->malice_za_danes as $obrok)
                {{-- @php dd($obrok->malica); @endphp --}}
              <div class="py-2 xs:py-6 px-4">
                <p class="mb-1 font-semibold">{{ $obrok['malica'] }}</p>
                <p>{{ $obrok['cena'] }} €</p>
              </div>
              @if($loop->last) <span></span>@else<div>. . .</div>@endif
            @endforeach
          </div>
        @empty
          <p>Trenutno ni vpisanih malic. Poglejte <a href="/malice" class="uppercase cursor-pointer hover:underline text-gold">tedensko ponudbo malic</a> ali <a href="/jedilni-list" class="uppercase cursor-pointer hover:underline text-gold">jedi po narocilu.</a></div></p>
        @endforelse
      </div>

</div>

<script>
  gsap.registerPlugin(ScrollTrigger)

  gsap.from(".malica", {
        duration:1.5,
        opacity:0,
        // scale:0.8,
        ease:"linear",
        stagger:0.2,
        scrollTrigger:{
          trigger:".malica",
          markers: false,
          toggleActions: "restart none none none"
        }
      })
  </script>


{{-- orderBy, pokazi ze v nedeljo --}}
{{-- min-w-fit  in brez w-56, razlicno siroki, glede na vsebino --}}
