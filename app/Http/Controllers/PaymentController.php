<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Leasing;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
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

        $car = Car::find($request->car_id);
        $myCar = $car->brand . ' ' . $car->model . ' ' . $car->year;


        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";


        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'TRY',
                        'product_data' => [
                            "name" => $myCar,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success', ['data' => $request->all()]),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }


    public function success(Request $request)
    {
        $request = $request->data ;
        if (count($request)  >= 12) {
            Leasing::create([
                'user_id'   =>  Auth::user()->id,
                'car_id'   => $request['car_id'],
                'rental_day'       => $request['rental_day'],
                'rental_hour'    => $request['rental_hour'],
                'delivery_day'       => $request['delivery_day'],
                'delivery_hour' => $request['delivery_hour'],
                'day_num'    => $request['day_num'],
                'teslim_alindi'    => $request['teslim_alindi'],
                'teslim_verildi'    => $request['teslim_verildi'],
                'driver_id'     => $request['driver_id'],
                'driver_price'     => $request['driver_price'],
                'status'     => 1,
            ]);
        } else {
            Leasing::create([
                'user_id'   =>  Auth::user()->id,
                'car_id'   => $request['car_id'],
                'rental_day'       => $request['rental_day'],
                'rental_hour'    => $request['rental_hour'],
                'delivery_day'       => $request['delivery_day'],
                'delivery_hour' => $request['delivery_hour'],
                'day_num'    => $request['day_num'],
                'teslim_alindi'    => $request['teslim_alindi'],
                'teslim_verildi'    => $request['teslim_verildi'],
                'status'     => 1,
            ]);
        }
        $car = Car::find($request['car_id']);
        $car->update([
            'status'  => 0 ,
        ]);
        return view('user.components.paymentSuccess');
    }

    public function checkout()
    {
        // return view ('checkout') ;
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
