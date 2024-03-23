<div class="absolute top-4 right-4">

    @if ($availability)
    <div class=" text-white bg-green-400 p-2 rounded-lg text-sm">
        <p>{{$availability['available']}} {{Str::plural('Room',$availability['available'])}} Available</p>
       </div>

        @else
        <div class=" text-white bg-red-400 p-2 rounded-lg text-sm">
           <p>Currently Unavailable</p>
          </div>
    @endif


</div>

