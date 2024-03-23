<section>
    @if ($accommodation)
        <x-accommodation-details :accommodation="$accommodation" />
    @else
    <div  class="mx-auto p-8 bg-slate-100">
      
        {{-- search for accommodations --}}
    {{-- search for accommodations --}}
    <div class="flex gap-4 justify-center p-4 w-full bg-white rounded-lg mb-8 shadow-md">



            <div class="relative w-full">
         
                <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Search accommodation name, location or country" required />
                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
                      
                </button>
            </div>
            <div class="relative w-48">
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-3  0">
                    <option value="">Sort By Price</option>
                    <option value="">Sort By Location</option>
                    <option value="">Sort By Rating</option>
                </select>
            </div>
  
        
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse ($accommodations['accommodations'] as $accommodation)
            <x-accommodation-card :accommodation="$accommodation" />

        @empty
            <div class="text-center text-gray-500">
                <p>No accommodation found</p>
            </div>
        @endforelse
        </div>    
        <div class="flex justify-center mt-8">
            <nav class="flex space-x-2" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm border border-gray-400 rounded bg-transparent">
                    Previous
                </a>

                @for ($i = 1; $i < 6; $i++)
                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium">
                    {{$i}}
                </a>
                @endfor

  
                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm border border-gray-400 rounded bg-transparent">
                    Next
                </a>
            </nav>
        </div>
    </div>
    @endif
   
</section>