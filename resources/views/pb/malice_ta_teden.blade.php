@php
  $today = Carbon\CarbonImmutable::now();
  $startOfWeek = $today->startOFWeek();
  $endOfWeek = $today->endOfWeek();
  $malice_ta_teden = \Statamic\Facades\Entry::query()->where('collection', 'malice')
      ->where('date', '>=', $startOfWeek)->where('date', '<', $endOfWeek)->orderBy('date')->get();
  dump($type_previous);
  dump($type_current);
  dump($type_next);
  dump($types);
@endphp

<div class="max-w-7xl mx-auto py-24 px-8 text-center">
  <div class="font-special text-5xl xs:text-7xl text-gold tracking-wide mb-16">Malice ta teden</div>

      <div class="flex flex-wrap gap-6 justify-center">
        @forelse ($malice_ta_teden as $entry)
          {{-- @php dd($entry); @endphp --}}
          <div class="malica w-56 border border-gold/50 shadow-md hover:shadow-lg hover:bg-beige py-3 ">
            <h3 class="px-4 py-3 text-lg font-semibold text-gold">{{ $entry->date()->locale('sl')->dayName }}, {{ $entry->date()->format('d.m.Y') }}</h3>
            @foreach ($entry->malice_za_danes as $obrok)
                {{-- @php dd($obrok->malica); @endphp --}}
              <div class="py-2 xs:py-6 px-4">
                <p class="mb-1 font-semibold">{{ $obrok['malica'] }}</p>
                <p>{{ $obrok['cena'] }} evrov</p>
              </div>
              @if($loop->last) <span></span>@else<div>. . .</div>@endif
            @endforeach
          </div>
        @empty
          <p>Trenutno ni vpisanih malic. Poglejte <a href="/malice" class="uppercase cursor-pointer hover:underline text-gold">tedensko ponudbo malic</a> ali <a href="/jedilni-list" class="uppercase cursor-pointer hover:underline text-gold">jedi po narocilu.</a></div></p>
        @endforelse
      </div>

</div>


{{-- orderBy, pokazi ze v nedeljo --}}
{{-- min-w-fit  in brez w-56, razlicno siroki, glede na vsebino --}}
