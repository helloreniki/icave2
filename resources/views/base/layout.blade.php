@php
  // PAGE —————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
  $pg['url']=$url
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link rel="preload" as="font" type="font/woff2" href="{{ url('/') }}/fonts/lato-v22-latin-ext_latin-700.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="{{ url('/') }}/fonts/lato-v22-latin-ext_latin-900.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="{{ url('/') }}/fonts/lato-v22-latin-ext_latin-regular.woff2" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="{{ url('/') }}/fonts/parisienne-v12-latin-ext_latin-regular.woff2" crossorigin>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @include('base.gsap')

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    [x-cloak] { display: none !important; }
  </style>
  <title>Document</title>
</head>
<body class="font-sans">


  @include('parts.header')

  @php
    $image_blocks = ['novice', 'slika_grid', 'slika_mixed'];
    $types = [];
    $blocks = [];
    foreach ($pb as $block) {
      $types[] = $block['type'];
      $blocks[] = $block;
    }
    $block_counter = 0;
  @endphp

  @foreach ($pb as $block)
      @php
          // dump($block)
          // $types[] = $block['type']; // arr of all block types on the page, already done in loop above
          $type_current = $block['type']; // or $types[$block_counter];
          $type_previous = $types[$block_counter - 1] ?? false;
          $type_next = $types[$block_counter + 1] ?? false;

          $block_previous = $blocks[$block_counter - 1] ?? false;
          $block_next = $blocks[$block_counter + 1] ?? false;
          $block_current = $block;

          $barva_ozadja_previous = $blocks[$block_counter - 1]['barva_ozadja'] ?? false;
          $barva_ozadja_next = $blocks[$block_counter + 1]['barva_ozadja'] ?? false;
          $barva_ozadja_current = $block['barva_ozadja'] ?? false;

          $block_counter++;
      @endphp
      @include('pb.' . $block['type'])
      {{-- prev: @dump($block['barva_ozadja'] ?? false);
      current: @dump($block_previous['barva_ozadja'] ?? false); --}}
      {{-- prev: @dump($barva_ozadja_previous)
      current: @dump($barva_ozadja_current) --}}
  @endforeach

  @include('parts.footer')

  @if (session()->has('success'))
    <x-success-message />
  @endif

</body>

</html>
