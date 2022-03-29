<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
// use App\Models\ReportController;
use App\Http\Controllers\ReportController;
use App\Models\Package;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\ProfileController;
use App\Http\Controllers\front\ApplicationController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'App\Http\Controllers\PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'App\Http\Controllers\PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'App\Http\Controllers\PaypalController@getPaymentStatus',));

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


Route::get('/', function () {
    return view('login');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';



Route::get('/dashboard' , function(){
return view('dashboard');
});

// Route::view('/table')->name('pac')
Route::resource('packages', PackageController::class);
Route::get('packages/features/{id}' , [PackageController::class, 'addFeatures'])->name('addFeatures');
Route::post('packages/features/{id}' , [PackageController::class, 'StoreFeatures'])->name('StoreFeatures');
Route::get('packages/features/edit/{id}' , [PackageController::class, 'EditFeatures'])->name('EditFeatures');
Route::get('packages/status/{id}' , [PackageController::class , 'status'])->name('packages.status');

Route::resource('subscription', SubscriptionController::class);



/// start profile

Route::group(['prefix' => 'profile'], function () {

    Route::get('/',[ProfileController::class ,'index']) -> name('profile.index');
    Route::get('create',[ProfileController::class ,'create']) -> name('profile.create');
    Route::post('store',[ProfileController::class ,'store']) -> name('profile.store');

    Route::get('edit/{id}',[ProfileController::class ,'edit']) -> name('admin.languages.edit');
    Route::post('update/{id}',[ProfileController::class ,'update']) -> name('admin.languages.update');


});

// /start app
Route::group(['prefix' => 'application'], function () {

    Route::get('/',[ApplicationController::class ,'index']) -> name('application.index');
    Route::get('create',[ApplicationController::class ,'create']) -> name('application.create');
    Route::post('store',[ApplicationController::class ,'store']) -> name('application.store');

    Route::get('edit/{id}',[ApplicationController::class ,'edit']) -> name('application.edit');
    Route::post('update/{id}',[ApplicationController::class ,'update']) -> name('application.update');
    Route::post('destroy/{id}',[ApplicationController::class ,'update']) -> name('application.destroy');




});




Route::resource('features' , FeatureController::class);
Route::get('get-price' , [PaymentController::class , 'getPrice']);
Route::post('get-price' , [PaymentController::class , 'ChosePrice'])->name('ChosePrice');
Route::get('/page' , function(){
    return view('page');
});

Route::get('test' , function(){
    // dd('test');
    // code to get Package Fetures
//    return
});
Route::resource('subscription', SubscriptionController::class);
Route::get('client-reports' , [ReportController::class , 'Clients'])->name('client.reports');

//LOGIN
Route::get('/clients/dashboard' , [FrontController::class , 'index'])->name('clients.dashboard');
