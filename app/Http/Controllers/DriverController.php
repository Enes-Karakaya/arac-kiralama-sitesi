<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
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
            'yer_id'   => 'required|numeric' ,
            'Ad'       => 'required|string|max:255',
            'Soyad'    => 'required|string|max:255',
            'tc'       => 'required|digits:11',
            'birthDay' => 'required|date',
            'Email'    => 'required|string|max:255',
            'phone'    => 'required|digits:11',
            'maas'     => 'required|numeric',

        ]);
        Driver::create([
            'yerler_point_id'   => $request->yer_id    ,
            'name'       => $request->Ad    ,
            'surname'    => $request->Soyad    ,
            'tc'       => $request->tc    ,
            'birth_day' => $request->birthDay    ,
            'email'    => $request->Email    ,
            'phone'    => $request->phone    ,
            'driver_price'     => $request->maas    ,
            'status'   =>  0    ,
        ]);
        return redirect()->back() ;
    }
    public function destroy($id)
    {
        $driver = Driver::find($id);

        if ($driver) {
            $driver->delete();
            return redirect()->back()->with('success', 'Driver deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Driver not found!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
