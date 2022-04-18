@php
    // dd(get_defined_vars());
    // dd();
    $company_name = $kontakt['company_name'];
    $address = $kontakt['address'];
    $post = $kontakt['post'];
    $email = $kontakt['email'];
    $phone_number = $kontakt['phone_number'];
    $working_days = $delovni_cas['working_days'];
    $working_hours = $delovni_cas['working_hours'];

@endphp

<footer class="bg-gray-900 text-white py-16 px-12">

    <div class="max-w-7xl mx-auto">
      <div class="block text-center space-y-6 sm:space-y-0 sm:flex sm:text-left justify-between">
        <div>
          <div class="uppercase font-semibold text-gold mb-4 md:text-xl">Naslov</div>
          <div class="font-light text-sm sm:text-base md:text-lg md:tracking-wider">
            <div>{{ $company_name }}</div>
            <div>{{ $address }}</div>
            <div>{{ $post }}</div>
          </div>
        </div>
        <div class="text-center leading-loose">
          <div class="uppercase font-semibold text-gold mb-4 md:text-xl">Delovni cas</div>
          <div class="font-light text-sm sm:text-base md:text-lg md:tracking-wider">{{ $working_days }}</div>
          <div class="font-light text-sm sm:text-base md:text-lg md:tracking-wider">{{ $working_hours }}</div>
        </div>
        <div class="leading-loose">
          <div class="uppercase font-semibold text-gold mb-4 md:text-xl">Kontakt</div>
          <div class=" font-light text-sm sm:text-base md:text-lg md:tracking-wider">
            <div>{{ $email }}</div>
            <div>{{ $phone_number }}</div>
          </div>
        </div>
      </div>
      <p class="mt-16 text-center md:text-lg">
        &copy; {{ date("Y") }} The Cave. All rights reserved.
      </p>
    </div>

</footer>
