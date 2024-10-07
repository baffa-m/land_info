<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Firms;
use App\Models\LandRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index() {
        $lands = LandRecords::where('is_available', true)->take(3)->get();
        return view('welcome', compact('lands'));
    }

    public function registerOwner() {
        return view('auth.register');
    }

    public function firms() {
        $firms = Firms::all();
        return view('firm.consult-firm', compact('firms'));
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

    public function register(Request $request) {
        $request->validate(
            [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // 'password_confirmation' is required for this
            'phone_no' => 'required|string|max:15', // Assuming max length of 15 for phone numbers
        ]);

        // Create and save the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Securely hash the password
            'phone_no' => $request->phone_no,
        ]);

        Auth::login($user);

        return redirect()->route('index');
    }
}
