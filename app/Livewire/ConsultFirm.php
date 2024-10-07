<?php

namespace App\Livewire;

use App\Models\Firms;
use Livewire\Component;

class ConsultFirm extends Component
{
    public $search = '';

    public function render()
    {
        // Search query
        $firms = Firms::where('company_name', 'like', '%' . $this->search . '%')
            ->orWhere('address', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.consult-firm', compact('firms'));
    }
}
