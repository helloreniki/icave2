@php
  // PAGE —————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————————
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

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    [x-cloak] { display: none !important; }
  </style>
  <title>Document</title>
</head>
<body class="font-sans">

  @include('parts.header')

  <div>{{ $title }}</div>

  {{-- @foreach ($pb as $block)
      @include('pb.' . $block['type'])
  @endforeach --}}

  @include('parts.footer')

</body>
</html>
