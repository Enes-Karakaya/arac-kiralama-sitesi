<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Leasing;
use App\Models\Maintencance;
use App\Models\Violation;
use App\Models\YerlerPoints;
use Carbon\Carbon;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class moveController extends Controller
{

    // user Pgae

    public function  moveAbout(): View
    {
        if (view()->exists('user.components.about')) {

            return view('user.components.about');
        } else {
            return view('user.components.404');
        }
    }

    public function moveIndex() // : View
    {


        if (Auth::user()->is_company == 1 && view()->exists('admin.components.home')) {

            $cars = [];
            $points = YerlerPoints::all()->where('company_id', Auth::user()->id);

            foreach ($points as $point) {
                $car = $point->YerlerPointCars;
                array_push($cars, $car);
            }
            return view('admin.components.home' , compact('cars'));
        } elseif (Auth::user()->is_company == 0 &&  view()->exists('user.components.home')) {

            $carsArray = [];
            $yerler_pointsArray = [];

            $cars = Car::all();
            $yerler_points = YerlerPoints::all();

            // for not repeate same car type

            foreach ($cars as $car) {

                $in_array = in_array($car->brand, $carsArray);
                if ($in_array != 1) {
                    array_push($carsArray, $car->brand);
                }
            }
            // for not repeate same yerel Points

            foreach ($yerler_points as $yerler_point) {

                $address = $yerler_point->city . ', ' . $yerler_point->ilce . ', ' . $yerler_point->mahalle;
                $in_array = in_array($address, $yerler_pointsArray);
                if ($in_array != 1) {
                    array_push($yerler_pointsArray, $address);
                }
            }
            $request = [];
            $cars = ['no'];

            return view('user.components.home', compact('cars', 'carsArray', 'yerler_pointsArray', 'request'));
        } else {
            return view('user.components.404');
        }
    }


    public function moveService(): View
    {
        if (view()->exists('user.components.service')) {
            return view('user.components.service');
        } else {
            return view('user.components.404');
        }
    }


    public function moveFeature(Request $request)
    {

        if (view()->exists('user.components.feature')) {

            $car = Car::find($request->car_id);
            $data = $request;
            $point = YerlerPoints::find($car->yerler_point_id);
            $data['alisYeri'] = $point->city . ", " . $point->ilce . ", " . $point->mahalle;

            $drivers = [];
            if ($request->driver == "on") {

                $drivers  = Driver::all()->where('yerler_point_id', $point->id)->where('status', 1);
                if (sizeof($drivers) != 0) {
                    $driver =  $drivers->random();
                    $data['isDriver'] = true;
                    $data['driver_id'] = $driver->id;
                    $data['driver_price'] = $driver->driver_price;
                } else {
                    $data['isDriver'] = false;
                }
            }



            if ($request->alisTarihi != null && $request->verisTarihi != null) {

                $startDate = new DateTime($request->alisTarihi);
                $endDate = new DateTime($request->verisTarihi);

                $interval = $endDate->diff($startDate);
                $data['day_num'] = $interval->days;
                return view('user.components.feature', compact('car', 'data'));
            }
        } else {
            return view('user.components.404');
        }
    }


    public function moveCars()
    {
        $carsData = [];
        $driverData = [];


        $leasings = Leasing::all()->where('user_id', Auth::user()->id);

        foreach ($leasings as  $leasing) {
            $car = Car::find($leasing->car_id);
            $point = YerlerPoints::find($car->yerler_point_id);
            $car['address'] = $point->city . ", " . $point->ilce . ", " . $point->mahalle;
            $car['location'] = $point->location;
            $car['phone'] = $point->phone;


            array_push($carsData, $car);
        }


        foreach ($leasings as  $leasing) {
            $driver = Driver::find($leasing->car_id);
            $age = Carbon::parse($driver->birth_day)->age;
            $driver['age'] = $age;

            array_push($driverData, $driver);
        }



        if (view()->exists('user.components.cars')) {
            return view('user.components.cars', compact('leasings', 'carsData', 'driverData'));
        } else {
            return view('user.components.404');
        }
    }


    public function moveContact(): View
    {
        if (view()->exists('user.components.contact')) {
            return view('user.components.contact');
        } else {
            return view('user.components.404');
        }
    }

    public function moveLogin(): View
    {
        if (view()->exists('Login')) {
            return view('Login');
        } else {
            return view('user.components.404');
        }
    }

    public function moveRegister(): View
    {
        if (view()->exists('register')) {
            return view('register');
        } else {
            return view('user.components.404');
        }
    }

    // welcome

    public function  welcomePage(): View
    {
        if (view()->exists('welcome.components.home')) {

            $carsArray = [];
            $yerler_pointsArray = [];

            $cars = Car::all();
            $yerler_points = YerlerPoints::all();

            // for not repeate same car type

            foreach ($cars as $car) {

                $in_array = in_array($car->brand, $carsArray);
                if ($in_array != 1) {
                    array_push($carsArray, $car->brand);
                }
            }
            // for not repeate same yerel Points

            foreach ($yerler_points as $yerler_point) {

                $address = $yerler_point->city . ', ' . $yerler_point->ilce . ', ' . $yerler_point->mahalle;
                $in_array = in_array($address, $yerler_pointsArray);
                if ($in_array != 1) {
                    array_push($yerler_pointsArray, $address);
                }
            }
            $request = [];


            return view('welcome.components.home', compact('cars', 'yerler_pointsArray', 'carsArray'));
        } else {
            return view('welcome.components.404');
        }
    }

    public function moveAboutWelcome(): View
    {
        if (view()->exists('welcome.components.about')) {

            $cars = Car::all();
            return view('welcome.components.about', compact('cars'));
        } else {
            return view('welcome.components.404');
        }
    }

    public function moveIndexWelcome(): View
    {
        if (view()->exists('welcome.components.home')) {

            $carsArray = [];
            $yerler_pointsArray = [];

            $cars = Car::all();
            $yerler_points = YerlerPoints::all();

            // for not repeate same car type

            foreach ($cars as $car) {

                $in_array = in_array($car->brand, $carsArray);
                if ($in_array != 1) {
                    array_push($carsArray, $car->brand);
                }
            }
            // for not repeate same yerel Points

            foreach ($yerler_points as $yerler_point) {

                $address = $yerler_point->city . ', ' . $yerler_point->ilce . ', ' . $yerler_point->mahalle;
                $in_array = in_array($address, $yerler_pointsArray);
                if ($in_array != 1) {
                    array_push($yerler_pointsArray, $address);
                }
            }
            $request = [];
            return view('welcome.components.home', compact('cars', 'yerler_pointsArray', 'carsArray'));
        } else {
            return view('welcome.components.404');
        }
    }


    public function moveServiceWelcome(): View
    {
        if (view()->exists('welcome.components.service')) {
            $cars = Car::all();
            return view('welcome.components.service', compact('cars'));
        } else {
            return view('welcome.components.404');
        }
    }

    public function moveContactWelcome(): View
    {
        if (view()->exists('welcome.components.contact')) {
            $cars = Car::all();
            return view('welcome.components.contact', compact('cars'));
        } else {
            return view('welcome.components.404');
        }
    }

    public function mustLogin()
    {
        return redirect()->back()->with('ErrorMsg', 'Araba kiralamanızı etkinleştirmek için giriş yapmalısınız :(');
    }

    // admin

    public function homeAdminPage() // : View
    {
        $cars = [];
        $points = YerlerPoints::all()->where('company_id', Auth::user()->id);

        foreach ($points as $point) {
            $car = $point->YerlerPointCars;
            array_push($cars, $car);
        }
        if (view()->exists('admin.components.home')) {
            return view('admin.components.home' , compact('cars'));
        } else {
            return view('admin.components.404');
        }
    }


    public function AddPointAdminPage() //:  View
    {
        $points = YerlerPoints::all()->where('company_id', Auth::user()->id);

        if (view()->exists('admin.components.addPoint')) {

            return view('admin.components.addPoint', compact('points'));
        } else {
            return view('admin.components.404');
        }
    }

    public function AddDriverAdminPage()
    {
        if (view()->exists('admin.components.addDriver')) {



            $drivers = [];
            $points = YerlerPoints::all()->where('company_id', Auth::user()->id);

            foreach ($points as $point) {
                $driver = $point->YerlerPointDrivers;
                $driver['pointName']= $point->name;
                $driver['pointId']= $point->id;

                array_push($drivers, $driver);
            }
            // return $drivers;
            return view('admin.components.addDriver' , compact('drivers', 'points') );
        } else {
            return view('admin.components.404');
        }
    }

    public function AddCarAdminPage()
    {

        $cars = [];
        $points = YerlerPoints::all()->where('company_id', Auth::user()->id);

        foreach ($points as $point) {
            $car = $point->YerlerPointCars;
            $car['pointName']= $point->name;
            $car['pointId']= $point->id;

            array_push($cars, $car);
        }

        if (view()->exists('admin.components.addCar' )) {
            return view('admin.components.addCar' , compact('points','cars'));
        } else {
            return view('admin.components.404');
        }
    }

    public function maintencePage(): View
    {

        $cars = [];
        $points = YerlerPoints::all()->where('company_id', Auth::user()->id);

        foreach ($points as $point) {
            $car = $point->YerlerPointCars;
            $car['pointName']= $point->name;
            $car['pointId']= $point->id;

            array_push($cars, $car);
        }

        if (view()->exists('admin.components.maintence' )) {
            return view('admin.components.maintence' , compact('points','cars'));
        } else {
            return view('admin.components.404');
        }
    }

    public function maintenceEditPage($id)   : View
    {

        $maintences = Maintencance::all()->where('car_id', $id);


        if (view()->exists('admin.components.EditMaintence' )) {
            return view('admin.components.EditMaintence' , compact('id' , 'maintences'));
        } else {
            return view('admin.components.404');
        }
    }

    public function vioationPage(): View
    {
        $cars = [];
        $points = YerlerPoints::all()->where('company_id', Auth::user()->id);
        foreach ($points as $point) {
            $car = $point->YerlerPointCars;
            $car['pointName']= $point->name;
            $car['pointId']= $point->id;
            array_push($cars, $car);
        }
        if (view()->exists('admin.components.vioation')) {
            return view('admin.components.vioation' , compact('points','cars'));
        } else {
            return view('admin.components.404');
        }
    }
    public function vioationEditPage($id): View
    {

        $vioations = Violation::all()->where('car_id', $id);

        if (view()->exists('admin.components.EditVioation')) {
            return view('admin.components.EditVioation' , compact('vioations','id'));
        } else {
            return view('admin.components.404');
        }
    }

}





