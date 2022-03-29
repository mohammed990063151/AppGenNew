<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        Route::get('login',[AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login',[AuthenticatedSessionController::class, 'store'])->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[HomeController::class,'index'])->name('dashboard');
    });
    Route::post('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
});

Route::prefix('user-mangement')->group( function(){
    Route::resource('admin', AdminController::class);
});

Route::prefix('client-mangement')->group( function(){
    Route::resource('client', ClientController::class);
    Route::get('status/{id}', [ClientController::class , 'status'])->name('client.status');
});

// Route::get('')
Route::resource('subscription', SubscriptionController::class);
Route::get('subscription-report', [ReportController::class , 'subscription'])->name('subscription.reports');
Route::get('client-reports' , [ReportController::class , 'Clients'])->name('client.reports');
