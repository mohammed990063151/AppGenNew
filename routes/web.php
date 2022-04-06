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
use App\Models\FirebaseNotification;
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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('argon-login', function () {
//     return view('Argon.auth.login');
// });
Route::get('/', function () {
    return view('clients.dashboard');
});

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/



    Route::middleware('auth:web')->group(function () {

        Route::get('paywithpaypal', array('as' => 'paywithpaypal', 'uses' => 'App\Http\Controllers\PaypalController@payWithPaypal',));
        Route::post('paypal', array('as' => 'paypal', 'uses' => 'App\Http\Controllers\PaypalController@postPaymentWithpaypal',));
        Route::get('paypal', array('as' => 'status', 'uses' => 'App\Http\Controllers\PaypalController@getPaymentStatus',));

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        /// start profile
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
            Route::get('create', [ProfileController::class, 'create'])->name('profile.create');
            Route::post('store', [ProfileController::class, 'store'])->name('profile.store');
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
        });

        // start Screenes1
        Route::group(['prefix' => 'Screenes'], function () {
            // Route::resource('Screen',[ScreenController::class ]);
            Route::get('/', [ScreenController::class, 'index'])->name('Screen.index');
            Route::get('create', [ScreenController::class, 'create'])->name('Screen.create');
            Route::post('store', [ScreenController::class, 'store'])->name('Screen.store');
            Route::get('edit/{id}', [ScreenController::class, 'edit'])->name('Screen.edit');
            Route::post('update/{id}', [ScreenController::class, 'update'])->name('Screen.update');
            Route::post('destroy/{id}', [ScreenController::class, 'destroy'])->name('Screen.destroy');
        });

        Route::resource('features', FeatureController::class);
        Route::post('destroy/{id}', [ApplicationController::class, 'update'])->name('application.destroy');
    });

    Route::get('get-price', [PaymentController::class, 'getPrice'])->name('getPrice');
    Route::post('get-price', [PaymentController::class, 'ChosePrice'])->name('ChosePrice');

    Route::get('/clients/dashboard', [FrontController::class, 'index'])->name('clients.dashboard');
    Route::resource('notification', FirebaseNotificationController::class)->middleware('IsSubscribe');
    Route::get('get-priceing', [PaymentController::class, 'getPriceingInside'])->name('getPricing');
    Route::post('get-priceing', [PaymentController::class, 'PayInside'])->name('PayInside');
    Route::get('subscribtion-status/{id}', [PaymentController::class, 'subscribtionStatus'])->name('subscribtionStatus');
    Route::get('get-invoice', [InvoiceController::class, 'getInvoice'])->name('getInvoice');
    Route::post('pay-invoice', [InvoiceController::class, 'PayInvoice'])->name('PayInvoice');
});
