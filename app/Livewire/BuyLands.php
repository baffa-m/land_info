<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LandRecords;
use App\Models\Type;

class BuyLands extends Component
{

    public $plot_size;
    public $min_price;
    public $max_price;
    public $land_type;

    public function filterLands()
    {
        $lands = LandRecords::where('is_available', true);

        // Apply the filters based on user input
        if ($this->plot_size) {
            $lands->where('plot_size', $this->plot_size);
        }

        if ($this->land_type) {
            $lands->where('land_type_id', $this->land_type);
        }

        // Apply price filters only if the values are numeric
        if (!empty($this->min_price) && is_numeric($this->min_price)) {
            $lands->where('price', '>=', $this->min_price);
        }

        if (!empty($this->max_price) && is_numeric($this->max_price)) {
            $lands->where('price', '<=', $this->max_price);
        }

        // Return the filtered results
        return $lands->with('images')->paginate(10);
    }

    public function render()
    {
        // Pass the filtered lands to the view
        $lands = $this->filterLands();
        $land_types = Type::all();
        return view('livewire.buy-lands', [
            'lands' => $lands,
            'land_types' => $land_types
        ]);
    }

}
