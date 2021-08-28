<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\City;
use App\Models\Address;
use Livewire\Component;

class CityAreaSelects extends Component
{
    public $item = null;
    public $address;
    public $city;
    public $user_city = null;
    public $cities;
    public $areas;
    public $aa ;
 
    public function mount() 
    {
        // $this->user_city = $user_city;
        $this->cities = City::all();
        $this->city = collect();
        $this->areas = collect();
      //  dd($user_city);
    }

    public function updatedCity($city) {
        $this->areas = Area::where('city_id', $this->city)->get();
    }

    public function render()
    {
        return view('livewire.city-area-selects');
    }
}
