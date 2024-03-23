<?php

namespace App\Livewire;

use Livewire\Component;

class AccommodationList extends Component
{
    public $accommodations = null;
    public $accommodation = null;

    public $search = null;
    public $searchResults = null;

    public $sort = 'sort_order';
    public $sortDirection = 'asc';

    public function mount()
    {
        // Load the accommodations from the JSON file from the resources/data directory in laravel
        
        $json = file_get_contents(resource_path('data/accommodation.json'));

        $accomodations = collect(json_decode($json, true));

        $this->accommodations = $accomodations->sortBy($this->sort, SORT_REGULAR, $this->sortDirection);

        // $accommodations = (collect($this->accommodations['accommodations']));
        // $this->accommodation = $accommodations->where('id','67')->first();

    }

    public function updatedSearch()
    {

        $accom = collect($this->accommodations['accommodations'])->filter(function($accommodation){
            return str_contains(strtolower($accommodation['name']), strtolower($this->search));
        });

        $this->accommodations['accommodations'] = $accom;
    }

    public function setAccommodation($accommodation_id)
    {
        $accommodations = (collect($this->accommodations['accommodations']));
        $this->accommodation = $accommodations->where('id',$accommodation_id)->first();

    
    }

    public function unsetAccommodation()
    {
        $this->accommodation = null;
    }

    public function render()
    {
        
        return view('livewire.accommodation-list');
    }
}
