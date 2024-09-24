<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LandRecords;

class BuyLands extends Component
{

    public $plot_size;
    public $min_price;
    public $max_price;

    public function filterLands()
    {
        $lands = LandRecords::where('is_available', true);

        // Apply the filters based on user input
        if ($this->plot_size) {
            $lands->where('plot_size', $this->plot_size);
        }

        if ($this->min_price) {
            $lands->where('price', '>=', $this->min_price);
        }

        if ($this->max_price) {
            $lands->where('price', '<=', $this->max_price);
        }

        // Return the filtered results
        return $lands->with('images')->paginate(10);
    }

    public function render()
    {
        // Pass the filtered lands to the view
        $lands = $this->filterLands();

        return view('livewire.buy-lands', [
            'lands' => $lands
        ]);
    }

}
