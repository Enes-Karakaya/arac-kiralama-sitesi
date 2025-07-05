<?php

namespace App\Http\Controllers;

use App\Models\Violation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViolationController extends Controller
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
        $request->validate([
            "car_id"                =>  'required|numeric',
            "violation_type"        =>  'required|string|max:255',
            "cost"                  =>  'required|numeric',
            "violation_photo"       =>  'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $path = $request->file('violation_photo')->store("vergi", 'public');
        Violation::create([
            "car_id"                => $request->car_id ,
            "violation_type"        => $request->violation_type ,
            "cost"                  => $request->cost ,
            "violation_photo"       =>   $path ,
        ]);
        return back()->with('success', 'Driver deleted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Violation $violation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Violation $violation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Violation $violation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Violation $violation)
    {
        //
    }
}
