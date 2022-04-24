
<div x-data="{ openMobileMenu:false }" x-cloak class="fixed z-30 top-0 w-full bg-gray-900 text-white py-3 px-8">

  <div class="max-w-7xl mx-auto flex justify-between items-center">
      <div class="flex items-center">
        {{-- <div class="">Logo</div> --}}
        <div class="text-xl text-gold font-extrabold tracking-widest border-b-4 border-gold py-1">The CAVE</div>
      </div>
      <div class="hidden xs:inline-block">
        <div class="flex space-x-4 md:space-x-8 items-center">
          {{-- https://statamic.dev/tags/collection#parameters --}}
          {{-- @dd(Statamic::tag('collection:pages')->fetch()->toArray()) --}}
          @foreach (Statamic::tag('nav:collection:pages')->params(['include_home' => true])->sort('order')->fetch() as $entry)
          {{-- @dd($entry) --}}
          {{-- @dd($entry['is_current']) --}}
          {{-- @dd($entry['url']->value()) --}}
          {{-- @dd($entry['title']->value()) --}}
          <div>
              <a href="{{ $entry['url']->value() }}" class="text-sm sm:text-base tracking-wider {{ $entry['title']->value() === 'Domov' ? 'hidden sm:inline' : ''}} {{ $entry['is_current'] ? 'font-bold text-gold border-b-4 border-gold py-1' : '' }} ">
                  {{ $entry['title']->value() }}
              </a>
          </div>
          @endforeach
        </div>
      </div>
      <div class="xs:hidden">
        <svg @click="openMobileMenu = !openMobileMenu" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </div>
  </div>
  <div
    x-show="openMobileMenu"
    x-transition:enter="transition ease-out duration-1000"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-1000"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="bg-gray-900 opacity-95 absolute top-16 inset-x-0 text-center w-full p-16 space-y-4">
    @foreach (Statamic::tag('collection:pages')->sort('order') as $entry)
      <div class="">
        <a href="{{ $entry->url() }}" class="text-sm sm:text-base tracking-wider {{ $entry->url() == $pg['url'] ? 'font-bold text-gold py-1' : '' }} ">
          {{ $entry->title }}
        </a>
      </div>
    @endforeach
  </div>

</div>
