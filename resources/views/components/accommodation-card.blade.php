<div class="bg-white rounded-lg shadow-md transition-all scale-100 cursor-pointer hover:scale-105 hover:shaddow-xl overflow-hidden" wire:click="setAccommodation('{{$accommodation['id']}}')">
   
  <div class="bg-cover relative h-[300px] bg-center" style="background-image:url('{{$accommodation['images'][0]['filename']}}')">

    <div class="bg-gradient-to-t from-black/75 via-black/0 h-full w-full">
    
    <div class="absolute bottom-4 left-4 text-white">
      <p class="text-sm">{{ $accommodation['resort']['name'] }}, {{ $accommodation['country']['name'] }} </p>
      <h3 class="font-bold text-xl">
          {{ $accommodation['name'] }}
      </h3>

    </div>
  </div>
  </div>
   <div class="p-4">
    <div class="line-clamp-3">


    {!!$accommodation['description']!!}
  </div>
    <button class="mt-8 flex items-center gap-2" type="button"
        class=""><span>Check availability</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
        </button>

   </div>
   <div class="absolute top-4 right-4">

 
    <span class="inline-flex gap-2 align-middle text-white">


      @for ($i = 0; $i < $accommodation['rating']['id']; $i++)
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
          </svg>
      @endfor
  </span>
</div>
</div>
@php

    $json = '
{
"id": 65,
"sort_order": 0,
"name": "Hotel Garni Almhof - In Town - Central Mayrhofen",
"type": {
  "id": 1,
  "name": "Hotel"
},
"description": "<p>Alpine bliss! The Almhof sits in a meadow in Mayrhofen, surrounded by magnificent mountain views. Just a short stroll from the centre of the festival and the main ski lifts, you can escape the madness in minutes to chill on your balcony and watch the sun set behind the Penken, or relax in the reading lounge - with free WiFi. Ohh la la.</p> <p>Each room is kitted out with a TV, hairdryer, safe, telephone and balcony overlooking Mayrhofen&rsquo;s snow-capped mountains and the new spa area comes equipped with a Finnish sauna, steam bath and a gym.</p> <p>If you want great value, centrally located traditional Austrian accommodation with clean and simple Tyrolean themed d&eacute;cor, then look no further than the Almhof&hellip;</p>",
"address_1": "Laubichl 141",
"address_2": "",
"address_3": "Mayrhofen",
"postcode": "A-6290",
"country": {
  "id": 15,
  "name": "Austria"
},
"resort": {
  "id": 74,
  "name": "Mayrhofen Central"
},
"location": {
  "id": 522,
  "location_long": 11.86708005850528,
  "location_lat": 47.1726510645752,
  "name": "Hotel Garni Almhof"
},
"images": [
  {
    "alt": "Dummy Image",
    "title": "Dummy Image",
    "filename": "https://via.placeholder.com/500/EE5E55/ffffff/?text=Kaboodle"
  }
],
"rating": {
  "id": 3,
  "label": "3*"
},
"facilities": [
  {
    "id": 36,
    "label": "Balcony or Terrace"
  },
  {
    "id": 1,
    "label": "En Suite"
  },
  {
    "id": 8,
    "label": "Gardens"
  },
  {
    "id": 28,
    "label": "Restaurant"
  },
  {
    "id": 10,
    "label": "Safety Deposit Box"
  },
  {
    "id": 33,
    "label": "Sat TV"
  },
  {
    "id": 26,
    "label": "Sauna"
  },
  {
    "id": 34,
    "label": "Telephone"
  },
  {
    "id": 12,
    "label": "WIFI Access"
  }
],
"rooms": [
  {
    "id": 129,
    "sort_order": 450,
    "type_id": 22,
    "max_occupancy": 2,
    "min_occupancy": 2,
    "number_of_nights": 5,
    "type": "Austrian Twin/Double",
    "name": "Austrian Twin/Double"
  },
  {
    "id": 130,
    "sort_order": 0,
    "type_id": 4,
    "max_occupancy": 3,
    "min_occupancy": 3,
    "number_of_nights": 5,
    "type": "Triple",
    "name": "Triple"
  }
]
}';
@endphp
