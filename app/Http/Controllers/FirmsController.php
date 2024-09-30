<?php

namespace App\Http\Controllers;

use App\Models\Firms;
use Illuminate\Http\Request;

class FirmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Firms $firm)
    {
        return view('firm.show-firm', compact('firm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Firms $firms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Firms $firms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Firms $firms)
    {
        //
    }
}
