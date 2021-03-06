<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashBoardContorller;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MassegeController;
use App\Http\Controllers\OrganizationProfile;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Ticketadmincontroller;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketMassegeController;
use App\Http\Controllers\WebhookController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use PayPal\Api\Webhook;

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

// ->prefix('admin')


Route::group(['prefix' => LaravelLocalization::setLocale()],
    function(){
        Route::group(['prefix' => 'admin'], function () {
            // AdminController

Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLoginForm'])->name('get.admin.login');
    Route::post('/login', [AdminAuthController::class, 'AdminLoign'])->name('admin.login');
});



            Route::middleware('auth:admin')->group(function () {
                Route::get('dashboard', [DashBoardContorller::class, 'index'])->middleware('auth:admin')->name('dash');

                Route::prefix('user-mangement')->group(function () {
                    Route::resource('admin', AdminController::class);
                   
                });
               

                Route::prefix('client-mangement')->group(function () {
                    Route::resource('client', ClientController::class);
                    Route::get('status/{id}', [ClientController::class, 'status'])->name('client.status');
                });
                // ClientController
                // Route::get('')
                Route::resource('subscription', SubscriptionController::class);
                Route::get('subscription-report', [ReportController::class, 'subscription'])->name('subscription.reports');
                Route::get('client-reports', [ReportController::class, 'Clients'])->name('client.reports');
                Route::resource('packages', PackageController::class);
                Route::get('packages/features/{id}', [PackageController::class, 'addFeatures'])->name('addFeatures');
                Route::post('packages/features/{id}', [PackageController::class, 'StoreFeatures'])->name('StoreFeatures');
                Route::get('packages/features/edit/{id}', [PackageController::class, 'EditFeatures'])->name('EditFeatures');
                Route::get('packages/status/{id}', [PackageController::class, 'status'])->name('packages.status');
                Route::resource('subscription', SubscriptionController::class);
                Route::resource('subscription', SubscriptionController::class);
                Route::get('client-reports', [ReportController::class, 'Clients'])->name('client.reports');
                Route::resource('features', FeatureController::class);
                Route::get('notification-report', [ReportController::class, 'NotificationReport'])->name('notification.report');

                Route::get('orgnaization-profile', [OrganizationProfile::class, 'getForm'])->name('getOrganizationProfile');
                Route::post('orgnaization-profile', [OrganizationProfile::class, 'storeFrom'])->name('storeOrganizationProfile');
            });

            /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

            Route::middleware('auth:admin')->group(function () {
                ############ticket......
                Route::get('create-ticket', [TicketController::class, 'create'])->name('admin.ticket.create')->middleware('auth:admin');
                Route::post('store-ticket', [TicketController::class, 'store'])->name('admin.ticket.store')->middleware('auth:admin');
                Route::get('ticket', [TicketController::class, 'index'])->name('admin.ticket.index')->middleware('auth:admin');
                ############ticKet massage ................................................
                Route::get('ticket/massege/{id}', [TicketMassegeController::class, 'show'])->name('admin.ticket.show')->middleware('auth:admin');
                Route::post('ticket/massege/', [TicketMassegeController::class, 'store'])->name('admin.ticket.send')->middleware('auth:admin');
            });
        });
    }
);
