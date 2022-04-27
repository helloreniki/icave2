@component('mail::message')

Sporocilo iz kontaktnega obrazca na spletni strani:
od: {{ $data['name']}}
email posiljatelja: {{ $data['email']}}

{{ $data['content'] }}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent
