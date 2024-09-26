<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public function checkAuth()
    {
        if (!Auth::check()) {
            // Emit an event to open the login modal
            $this->dispatch('openLoginModal');
        } else {
            // Redirect to the intended route
            return redirect()->route('sell.land');
        }
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
