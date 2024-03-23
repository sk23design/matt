<?php

namespace App\Livewire;

use Livewire\Component;

class RoomAvailability extends Component
{

    public $rooms = null;
    public $room = null;
    public $availability = null;

    
    public function mount($room)
    {
        // Load the accommodations from the JSON file from the resources/data directory in laravel
        
        $json = file_get_contents(resource_path('data/accommodation_availability.json'));
 

        $this->rooms = json_decode($json, true);
       $this->room = $room;
       $search = collect($this->rooms['rooms']);
       $this->availability = $search->where('id',$room['id'])->first();
       

    }

    public function render()
    {
        return view('livewire.room-availability');
    }
}
