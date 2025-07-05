<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaintencanceController;
use App\Http\Controllers\moveController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\YerlerPointsController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;




// welcome pages

Route::get('/indexWelcome', [moveController::class, 'moveIndexWelcome'])->name('move.indexWelcome');
Route::get('/aboutWelcome', [moveController::class, 'moveAboutWelcome'])->name('move.aboutWelcome');
Route::get('/serviceWelcome', [moveController::class, 'moveServiceWelcome'])->name('move.serviceWelcome');
Route::get('/contactWelcome', [moveController::class, 'moveContactWelcome'])->name('move.contactWelcome');

Route::get('/mustLogin', [moveController::class, 'mustLogin'])->name('must.login');

// login pages

Route::get('/login', [moveController::class, 'moveLogin'])->name('move.loginPage');
Route::get('/register', [moveController::class, 'moveRegister'])->name('move.registerPage');


// main page
Route::get('/', [moveController::class, 'welcomePage'])->name('welcomePage');

Route::get('/indexPage', [moveController::class, 'moveIndex'])
    ->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    // user panel pages

    Route::get('/aboutPage', [moveController::class, 'moveAbout'])->name('move.aboutPage');
    Route::get('/servicePage', [moveController::class, 'moveService'])->name('move.servicePage');
    Route::post('/featurePage', [moveController::class, 'moveFeature'])->name('move.featurePage');
    Route::get('/carPages', [moveController::class, 'moveCars'])->name('move.carsPage');
    Route::get('/contactPage', [moveController::class, 'moveContact'])->name('move.contactPage');

    Route::post('/userSearchArac', [CarController::class, 'userSearchArac']);
    Route::get('/userSearchArac', [CarController::class, 'userSearchArac'])->name('user.searchArac');


    //  payment
    Route::post('/payment', [PaymentController::class, 'store'])->name('payment');
    Route::get('/success', [PaymentController::class, 'success'])->name('success');
    Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');



    // admin panel pages

    Route::get('/homeAdminPage', [moveController::class, 'homeAdminPage'])->name('move.homeAdminPage');

    //  point
    Route::get('/AddPointAdminPage', [moveController::class, 'AddPointAdminPage'])->name('move.AddPointAdminPage');
    Route::post('/AddPointAdminPage', [YerlerPointsController::class, 'store']);
    Route::post('/AddPointAdminPage/{id}', [YerlerPointsController::class, 'destroy'])->name('destroy.AddPointAdminPage');


    //  driver
    Route::get('/AddDriverAdminPage', [moveController::class, 'AddDriverAdminPage'])->name('move.AddDriverAdminPage');
    Route::post('/AddDriverAdminPage', [DriverController::class, 'store']);
    Route::post('/AddDriverAdminPage/{id}', [DriverController::class, 'destroy'])->name('destroy.AddDriverAdminPage');


    //  car
    Route::get('/AddCarAdminPage', [moveController::class, 'AddCarAdminPage'])->name('move.AddCarAdminPage');
    Route::post('/AddCarAdminPage', [CarController::class, 'store']);
    Route::post('/AddCarAdminPage/{id}', [CarController::class, 'destroy'])->name('destroy.AddCarAdminPage');

    //  edit car status
    Route::get('/AddCarAdminEdit/{id}', [CarController::class, 'addEdit'])->name('edit.AddCarAdminEdit');
    Route::get('/removeCarAdminEdit/{id}', [CarController::class, 'removeEdit'])->name('edit.removeCarAdminEdit');





    //  maintence
    Route::get('/maintencePage', [moveController::class, 'maintencePage'])->name('move.maintencePage');
    Route::get('/maintenceEditPage/{id}', [moveController::class, 'maintenceEditPage'])->name('move.maintenceEditPage');
    Route::get('/maintenceFinish/{maintencance}', [MaintencanceController::class, 'update'])->name('move.maintenceFinish');

    Route::post('/maintencePage', [MaintencanceController::class, 'store'])->name('store.maintenceEditPage');
    Route::post('/maintencePage/{id}', action: [MaintencanceController::class, 'destroy'])->name('destroy.maintencePage');



    //  vioation
    Route::get('/vioationPage', [moveController::class, 'vioationPage'])->name('move.vioationPage');
    Route::get('/vioationEditPage/{id}', [moveController::class, 'vioationEditPage'])->name('move.vioationEditPage');
    Route::post('/vioationPage', [ViolationController::class, 'store']);
    Route::post('/vioationPage/{id}', [ViolationController::class, 'destroy'])->name('destroy.vioationPage');


});












require __DIR__ . '/auth.php';
