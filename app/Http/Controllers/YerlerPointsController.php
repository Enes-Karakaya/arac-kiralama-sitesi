<?php

namespace App\Http\Controllers;

use App\Models\YerlerPoints;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YerlerPointsController extends Controller
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
            'name' => 'required|string|max:255',
            'sehir' => 'required|string|max:255',
            'ilce' => 'required|string|max:255',
            'mahalle' => 'required|string|max:255',
            'Full_address' => 'required|string|max:255',
            'phone' => 'required|digits:11',
            'location' => 'required|string|max:500',

        ]);
        YerlerPoints::create([
            'company_id'   => Auth::user()->id,
            'name'         => $request->name ,
            'city'         => $request->sehir ,
            'ilce'         => $request->ilce ,
            'mahalle'      => $request->mahalle ,
            'address'      => $request->Full_address ,
            'location'     => $request->location ,
            'phone'        => $request->phone ,

        ]);
        return redirect()->back() ;
    }

    public function destroy($id)
    {
        $driver = YerlerPoints::find($id);

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
    public function show(YerlerPoints $yerlerPoints)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(YerlerPoints $yerlerPoints)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, YerlerPoints $yerlerPoints)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
