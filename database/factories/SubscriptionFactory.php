<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $amount = [213, 453, 123];
        return [
            'uuid' => uniqid() ,
            'user_id'=> User::get()->Random() ,
            'package_id'=> Package::get()->Random() ,
            'exporation_date'=> date('y-m-d h:i:s'),
            'amount' => $amount[random_int(0, 2)],
            'transaction_id' => '1',
        ];
    }
}
