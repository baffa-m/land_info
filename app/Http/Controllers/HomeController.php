<?php

namespace App\Http\Controllers;

use App\Models\LandRecords;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function registerOwner() {
        return view('auth.register');
    }

    public function aboutUs() {
        return view('about-us');
    }

    public function contactUs() {
        return view('contact-us');
    }

    public function sellLand() {
        return view('sell');
    }

    public function buyLand() {

        $lands = LandRecords::where('is_available', true);
        return view('buy', compact('lands'));
    }
}
