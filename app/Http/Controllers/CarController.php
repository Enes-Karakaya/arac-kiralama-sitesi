<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\YerlerPoints;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class CarController extends Controller
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
            "yerler_point_id"      =>  'required|numeric',
            "brand"                =>  'required|string|max:255',
            "model"                =>  'required|string|max:255',
            "year"                 =>  'required|numeric',
            "Fuel_Type"            =>  'required|string|max:255',
            "Car_Type"             =>  'required|string|max:255',
            "color"                =>  'required|string|max:255',
            "people_num"           =>  'required|numeric',
            "depozito"             =>  'required|numeric',
            "toplam_km"            =>  'required|numeric',
            "minimum_age"          =>  'required|numeric',
            "minimum_ahliyet_year" =>  'required|numeric',
            "car_price"            =>  'required|numeric',
            'photo'                =>  'required|image|mimes:png|max:2048',
        ]);
        $path = $request->file('photo')->store("cars", 'public');
        Car::create([

            "yerler_point_id"      => $request->yerler_point_id,
            "brand"                => $request->brand,
            "model"                => $request->model,
            "year"                 => $request->year,
            "Fuel_Type"            => $request->Fuel_Type,
            "Car_Type"             => $request->Car_Type,
            "color"                => $request->color,
            "people_num"           => $request->people_num,
            "depozito"             => $request->depozito,
            "toplam_km"            => $request->toplam_km,
            "minimum_age"          => $request->minimum_age,
            "minimum_ahliyet_year" => $request->minimum_ahliyet_year,
            "car_price"            => $request->car_price,
            'photo'                => $path,
            "status"               =>  1,

        ]);
        return back()->with('success', 'Driver deleted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function addEdit( $id)
    {
        $car = Car :: find($id);
        $car->update([
            'status'  => 0 ,
        ]);
        return back()->with('success', 'Driver deleted successfully!');
    }

    public function removeEdit( $id)
    {
        $car = Car :: find($id);
        $car->update([
            'status'  => 1 ,
        ]);
        return back()->with('success', 'Driver deleted successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        if ($car) {
            $car->delete();
            return redirect()->back()->with('success', 'Driver deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Driver not found!');
        }

    }

    public function userSearchArac(Request $request)
    {
        $request->validate([
            'aracTipi' => 'required',
            'alisYeri' => 'required',
            'alisTarihi' => 'required|date',
            'alisSaati' => 'required|date_format:H:i',
            'verisTarihi' => 'required|date',
            'verisSaati' => 'required|date_format:H:i',
        ]);
        $carsArray = [];
        $yerler_pointsArray = [];
        $cars = Car::all();
        $yerler_points = YerlerPoints::all();

        foreach ($cars as $car) {

            $in_array = in_array($car->brand, $carsArray);
            if ($in_array != 1) {
                array_push($carsArray, $car->brand);
            }
        }
        foreach ($yerler_points as $yerler_point) {

            $address = $yerler_point->city . ', ' . $yerler_point->ilce . ', ' . $yerler_point->mahalle;
            $in_array = in_array($address, $yerler_pointsArray);
            if ($in_array != 1) {
                array_push($yerler_pointsArray, $address);
            }
        }
        // get the address in array
        $AlisYeriArray = [];
        $AlisYerler = explode(",", $request->alisYeri);
        foreach ($AlisYerler as $part) {
            $ele = trim($part);
            array_push($AlisYeriArray, $ele);
        }

        $yerlerCityCarArray = [];
        $yerlerIlceCarArray = [];
        $yerlerMahalleCarArray = [];
        $AllyerlerArray = [];
        $AllyerlerCarArray = [];

        $yerlerCityCarArray = YerlerPoints::all()->where('city', $AlisYeriArray[0]);
        $yerlerIlceCarArray = YerlerPoints::all()->where('city', $AlisYeriArray[0])
            ->where('ilce', $AlisYeriArray[1]);
        $yerlerMahalleCarArray = YerlerPoints::all()->where('city', $AlisYeriArray[0])
            ->where('ilce', $AlisYeriArray[1])
            ->where('mahalle', $AlisYeriArray[2]);

        foreach ($yerlerMahalleCarArray as $ele) {

            $in_array = in_array($ele, $AllyerlerArray);
            if ($in_array != 1) {
                array_push($AllyerlerArray, $ele);
            }
        }
        foreach ($yerlerIlceCarArray as $ele) {

            $in_array = in_array($ele, $AllyerlerArray);
            if ($in_array != 1) {
                array_push($AllyerlerArray, $ele);
            }
        }
        // sum arrays
        foreach ($yerlerCityCarArray as $ele) {

            $in_array = in_array($ele, $AllyerlerArray);
            if ($in_array != 1) {
                array_push($AllyerlerArray, $ele);
            }
        }
        // find all cars
        foreach ($AllyerlerArray as $elemens) {
            foreach ($elemens->YerlerPointCars as $elemen) {

                if (($elemen->brand == $request->aracTipi || $request->aracTipi == 'hepsi') && $elemen->status == 1) {
                    // return $elemens->city .', '. $elemens->ilce .', '. $elemens->mahalle;
                    $elemen['address'] = $elemens->city . ', ' . $elemens->ilce . ', ' . $elemens->mahalle;

                    array_push($AllyerlerCarArray, $elemen);
                }
            }
        }

        $cars = $AllyerlerCarArray;

        if (view()->exists('user.components.home')) {

            if (sizeof($cars) == 0) {
                return view('user.components.home', compact('cars', 'carsArray', 'yerler_pointsArray', 'request'))
                    ->with('ErrorMsg', 'There is no cars :(');
            } else {
                return view('user.components.home', compact('cars', 'carsArray', 'yerler_pointsArray', 'request'))->with('ErrorMsg', 'There is no cars :(');
            }
        } else {
            return view('user.components.404');
        }
    }



}
