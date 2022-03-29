<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $features = ['image notification' ,  'number of app' , 'copy right' , 'app customization' , 'splash screen' , 'google paly uploads' , 'slider' , 'about us' , 'contanct us' , 'notification'];
        foreach ($features as $feature) {
            Feature::factory(1)->create(['name' => $feature]);
        }
        // Package::factory(3)->create();
        // Subscription::factory(3)->create();
        // $this->call(AdminSeeder::class);

    }
}
