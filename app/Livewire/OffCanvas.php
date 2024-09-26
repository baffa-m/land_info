<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OffCanvas extends Component
{

    public $email;
    public $password;
    public $remember = false;

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials, $this->remember)) {
            return redirect()->back(); // Or any restricted area
        } else {
            $this->addError('email', 'Invalid credentials.');
        }
    }

    public function checkAuth()
    {
        dd('here');
        if (!Auth::check()) {
            // User is not authenticated, emit event to open modal
            $this->emit('openLoginModal');
        } else {
            // Redirect to the intended link if user is authenticated
            return redirect()->back();
        }
    }


    public function render()
    {
        return view('livewire.off-canvas');
    }
}
