<?php

namespace App\Http\Controllers;

use App\Models\LandRecords;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $lands = LandRecords::where('is_available', true)->take(3)->get();
        return view('welcome', compact('lands'));
    }

    public function registerOwner() {
        return view('auth.register');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function contactUs() {

        $admin = User::where('id', 1)->first();
        return view('contact-us', compact('admin'));
    }

    public function sellLand() {
        return view('sell');
    }

    public function buyLand() {

        $lands = LandRecords::where('is_available', true);
        return view('buy', compact('lands'));
    }

    public function logout() {
        Auth::logout();

        return redirect()->to('/');

    }
}
