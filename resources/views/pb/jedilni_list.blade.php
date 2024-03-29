@php
    // dd($jedilnik->kategorije)
@endphp

<div class="max-w-5xl mx-auto py-16 sm:py-24 px-4 xs:px-8 sm:px-16 text-center bg-beige">
  <h2 class="font-special text-5xl xs:text-7xl text-gold mb-6 xs:mb-12 py-2 text-center">Jedilni list</h2>

  <div class="space-y-16" x-data="{ trenutnaJed: '' }">
    @foreach ($jedilnik->kategorije as $kategorija)
      <div id="kategorija" class="">
        <h2 class="font-special text-4xl xs:text-6xl text-gold mb-8 py-2 col-span-12 text-center">{{ $kategorija->ime_kategorije }}</h2>
        <div  class="grid grid-cols-12 space-y-4">
          <div class="col-span-8 sm:col-span-10"></div>
          @if($kategorija->ime_kategorije == 'Pizze')
            <div class="mb-4 col-span-2 sm:col-span-1">Mala</div>
            <div class="mb-4 col-span-2 sm:col-span-1">Velika</div>
          @else
            <div></div>
            <div></div>
          @endif
          @foreach ($kategorija->jedi as $jed)
            <div class="select-none flex flex-col @if($jed->cena) col-span-10 sm:col-span-11 @else col-span-8 sm:col-span-10 @endif"
              @mouseover="trenutnaJed = '{{ $jed->ime_jedi }}'"
              >
              <div class="flex items-baseline group">
                <div class="min-w-max text-lg font-bold tracking-wide group-hover:text-gold">{{ $jed->ime_jedi }}</div>
                @if($jed->alergeni)<div class="hidden xs:block text-xs font-extralight ml-2">({{ $jed->alergeni }})</div>@endif
                <div class="w-full border-b border-dashed mx-2 group-hover:border-gold"></div>
              </div>
              @if($jed->sestavine)<div class="text-left text-sm tracking-wide">{{ $jed->sestavine }}</div>@endif
            </div>
            @if($jed->cena_mala)
              <div class="col-span-2 sm:col-span-1" :class="trenutnaJed === '{{ $jed->ime_jedi }}' ? 'text-gold' : ''">{{ $jed->cena_mala }} €</div>@endif
            @if($jed->cena_velika)<div class="col-span-2 sm:col-span-1" :class="trenutnaJed === '{{ $jed->ime_jedi }}' ? 'text-gold' : ''">{{ $jed->cena_velika }} €</div>@endif
            @if($jed->cena)
            <div class="col-span-2 sm:col-span-1" :class="trenutnaJed === '{{ $jed->ime_jedi }}' ? 'text-gold' : ''">{{ $jed->cena }} €
            </div>
            @endif
          @endforeach
        </div>
      </div>
    @endforeach
  </div>


</div>

<script>

gsap.from("#kategorija", {
        duration:2,
        opacity:0,
        // scale:0.8,
        ease:"linear",
        scrollTrigger:{
          trigger:"#kategorija",
          markers: false,
          toggleActions: "restart none none none"
        }
      })

</script>
