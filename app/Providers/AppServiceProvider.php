<?php

namespace App\Providers;

use App\Models\OrganizationProfile;
use Exception;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $Proifle = OrganizationProfile::first();
            // OrganizationProfile
            view()->share('OrganizationProfile', $Proifle);
        } catch (Exception $e) { }
    }
}
