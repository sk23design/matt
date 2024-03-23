<div>
    <div>

    </div>
    <div class="relative">
        <div class="h-[600px] bg-cover"
            style="background-image:url('{{ $accommodation['images']['0']['filename'] }}');background-position:center center">
            <div class="bg-gradient-to-t from-black/75 via-black/0 h-full w-full">

                <button type="button" wire:click="unsetAccommodation()"
                    class="absolute border border-white text-white top-8 left-8 py-2 px-3 rounded-lg flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                    </svg>

                    <span>Back</span>
                </button>
          
              
                <div class="absolute left-8 bottom-8 text-white">
                    <p>{{ $accommodation['resort']['name'] }}, {{ $accommodation['country']['name'] }} </p>
                    <h1 class="text-4xl font-bold">{{ $accommodation['name'] }}</h1>
                    <p>


                        <span class="inline-flex gap-2 align-middle">


                            @for ($i = 0; $i < $accommodation['rating']['id']; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                            @endfor
                        </span>
                    </p>
                </div>

            </div>
        </div>


    </div>
    <div>
        {{-- description --}}
        <div class="p-8">
            <h2 class="text-2xl font-bold">Description</h2>
            <div class="mt-4">
                {!! $accommodation['description'] !!}
            </div>
            {{-- facilities   --}}
            <h2 class="text-2xl font-bold mt-8">Facilities</h2>
            <div class="flex text-center mt-4">
                @foreach ($accommodation['facilities'] as $facility)
                    <div class="w-32">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                        </svg>

                        <span class="block mt-2 text-xs">
                            {{ $facility['label'] }}
                        </span>
                    </div>
                @endforeach
            </div>
            {{-- rooms --}}
            <h2 class="text-2xl font-bold mt-8">Rooms</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-4">
                @foreach ($accommodation['rooms'] as $room)
                    <div  class="bg-white rounded-lg shadow-md h-[300px] bg-cover relative overflow-hidden" style="background-image:url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww')">
                        <div class="bg-gradient-to-t from-black/75 via-black/0 h-full w-full">
                        <div class="text-white absolute bottom-4 left-4">
                        <h3 class="text-xl font-bold">{{ $room['name'] }}</h3>
                        <p class="mt-2">{{ $room['max_occupancy']}} people</p>

                    
                        </div>
                        
                    </div>
                    @isset($room['price'])
                    <div class="absolute right-4 bottom-4 text-white font-bold">{{$room['price']['price']}} / Night</div>
                    @endisset

                    @livewire('room-availability', ['room' => $room])

                    </div>
                @endforeach
            </div>

           
    </div>

     {{-- location --}}
     <div class="p-8">
        <h2 class="text-2xl font-bold mt-8">Location</h2>
     </div>

     <div class="mt-4">
         <div class="relative h-[400px] filter grayscale">
             <iframe class="absolute inset-0 w-full h-full"
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.073013073073!2d{{ $accommodation['location']['location_long'] }}!3d{{ $accommodation['location']['location_lat'] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f0b3b3b3b3b3%3A0x3b3b3b3b3b3b3b3!2s{{ $accommodation['location']['name'] }}!5e0!3m2!1sen!2suk!4v1629780000000!5m2!1sen!2suk"
                 style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>
     </div>
</div>
