<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Feature;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::table('organization_profiles')->insert([
            "logo" => 'logo.svg',
            "name" => "Faster",
            "address" => "KSA, Riyadh",
            "phone_no" => "96623323093",
            "whatsapp_no" => "96623323093",
            "email" => "info@faster.com",
        ]);
        Admin::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'name' => 'jksa altigani',
        ]);

        \App\Models\User::factory(1)->create([
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        $features = ['image notification' ,  'number of app' , 'copy right' , 'app customization' , 'splash screen' , 'google paly uploads' , 'slider' , 'about us' , 'contanct us' , 'notification'];
        foreach ($features as $feature) {
            Feature::factory(1)->create(['name' => $feature]);
        }
        // Package::factory(3)->create();
        // Subscription::factory(3)->create();
        // $this->call(AdminSeeder::class);

    }
}
