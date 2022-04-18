<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FirebaseNotificationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
// use App\Models\ReportController;
use App\Http\Controllers\ReportController;
use App\Models\Package;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\ProfileController;
use App\Http\Controllers\front\ApplicationController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\front\ScreenController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketMassegeController;
use App\Models\FirebaseNotification;
use App\Models\screen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


// ReportController
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by tGGhe RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('argon-login', function () {
//     return view('Argon.auth.login');
// });


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/



    Route::middleware('auth:web')->group(function () {

        Route::get('/', function () {
            return view('clients.dashboard');
        });

        Route::get('paywithpaypal', array('as' => 'paywithpaypal', 'uses' => 'App\Http\Controllers\PaypalController@payWithPaypal',));
        Route::post('paypal', array('as' => 'paypal', 'uses' => 'App\Http\Controllers\PaypalController@postPaymentWithpaypal',));
        Route::get('paypal', array('as' => 'status', 'uses' => 'App\Http\Controllers\PaypalController@getPaymentStatus',));

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        /// start profile
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
            Route::get('create', [ProfileController::class, 'create'])->name('profile.create');
            Route::POST('store', [ProfileController::class, 'store'])->name('profile.store');
            Route::get('edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::post('update/{id}', [ProfileController::class, 'update'])->name('profile.update');
            Route::post('destroy/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

        // /start app
        Route::group(['prefix' => 'application'], function () {
            Route::get('/', [ApplicationController::class, 'index'])->name('application.index');
            Route::get('create', [ApplicationController::class, 'create'])->name('application.create');
            Route::post('store', [ApplicationController::class, 'store'])->name('application.store');
            Route::get('edit/{id}', [ApplicationController::class, 'edit'])->name('application.edit');
            Route::post('update/{id}', [ApplicationController::class, 'update'])->name('application.update');
            Route::post('destroy/{id}', [ApplicationController::class, 'destroy'])->name('application.destroy');
            Route::get('application-details/{id}', [ApplicationController::class, 'AddDetialsDetials'])->name('AddDetialsDetials');
        });

        // start Screenes1
        Route::group(['prefix' => 'Screenes'], function () {
            // Route::resource('Screen',[ScreenController::class ]);
            Route::get('/', [ScreenController::class, 'index'])->name('Screen.index');
            Route::get('create/{id}', [ScreenController::class, 'create'])->name('Screen.create');
            Route::post('store', [ScreenController::class, 'store'])->name('Screen.store');
            // Route::get('edit/{id}', [ScreenController::class, 'edit'])->name('Screen.edit');
            Route::get('edit/{id}', [ScreenController::class, 'edit'])->name('Screen.edit');
            Route::post('update/{id}', [ScreenController::class, 'update'])->name('Screen.update');
            Route::get('edit1/{id}', [ScreenController::class, 'edit1'])->name('Screen.edit1');
            Route::post('update1/{id}', [ScreenController::class, 'update1'])->name('Screen.update1');
            Route::get('edit2/{id}', [ScreenController::class, 'edit2'])->name('Screen.edit2');
            Route::post('update2/{id}', [ScreenController::class, 'update2'])->name('Screen.update2');
            Route::post('destroy/{id}', [ScreenController::class, 'destroy'])->name('Screen.destroy');
            Route::get('create1/{id}', [ScreenController::class, 'create1'])->name('Screen.create1');
            Route::get('create2/{id}', [ScreenController::class, 'create2'])->name('Screen.create2');
            Route::post('store1', [ScreenController::class, 'store1'])->name('Screen.store1');
            Route::post('store2', [ScreenController::class, 'store2'])->name('Screen.store2');
        });


        Route::resource('features', FeatureController::class);
        Route::post('destroy/{id}', [ApplicationController::class, 'update'])->name('application.destroy');

        Route::get('create-ticket', [TicketController::class, 'create'])->name('ticket.create');
        Route::post('store-ticket', [TicketController::class, 'store'])->name('ticket.store');

        Route::group(['prefix' => 'ticket'], function () {
            Route::get('/', [TicketController::class, 'index'])->name('ticket.index');
            Route::get('/massege/{id}', [TicketMassegeController::class, 'show'])->name('ticket.show');
            Route::post('massege/', [TicketMassegeController::class, 'store'])->name('ticket.send');
        });
    });



    Route::get('get-price', [PaymentController::class, 'getPrice'])->name('getPrice');
    Route::post('get-price', [PaymentController::class, 'ChosePrice'])->name('ChosePrice');

    Route::get('/clients/dashboard', [FrontController::class, 'index'])->name('clients.dashboard');
    Route::resource('notification', FirebaseNotificationController::class); #->middleware('IsSubscribe');
    Route::get('get-priceing', [PaymentController::class, 'getPriceingInside'])->name('getPricing');
    Route::post('get-priceing', [PaymentController::class, 'PayInside'])->name('PayInside');
    Route::get('subscribtion-status/{id}', [PaymentController::class, 'subscribtionStatus'])->name('subscribtionStatus');
    Route::get('get-invoice', [InvoiceController::class, 'getInvoice'])->name('getInvoice');
    Route::post('pay-invoice', [InvoiceController::class, 'PayInvoice'])->name('PayInvoice');
});



// shagal fffff
