<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maintencance;
use Illuminate\Http\Request;

class MaintencanceController extends Controller
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
            "last_maintence_date"   =>  'required|date',
            "problem"               =>  'required|string|max:255',
            "cost"                  =>  'required|numeric',
            "description"           =>  'required|string|max:500',
            "bilPhoto"             =>  'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $path = $request->file('bilPhoto')->store("bakim", 'public');
        Maintencance::create([
            "car_id"                => $request->car_id ,
            "last_maintence_date"   => $request->last_maintence_date ,
            "problem"               => $request->problem ,
            "cost"                  => $request->cost ,
            "description"           => $request->description ,
            "bil_photo"             => $path ,
        ]);
        $car = Car :: find($request->car_id);
        $car->update([
            'status'  => 0 ,
        ]);
        return back()->with('success', 'Driver deleted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Maintencance $maintencance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maintencance $maintencance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Maintencance $maintencance)
    {
        $maintenc = Maintencance::find($maintencance->id);
        $maintenc->update([
            'status'  => 0 ,
        ]);
        $car = Car :: find($maintencance->car_id);
        $car->update([
            'status'  => 1 ,
        ]);
        return back()->with('success', 'Driver deleted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maintencance $maintencance)
    {
        //
    }
}
