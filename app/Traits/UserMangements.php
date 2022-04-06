<?php

namespace App\Traits;

trait UserMangements
{

    public function StoreUser($model,  $email, $name, $password, $package_id = null, $redirectRoute = null)
    {
        if ($package_id) $Data = ['email' => $email,  'password' => bcrypt($password), 'name' => $name, 'package_id' => $package_id];
        else $Data = ['email' => $email,  'password' => bcrypt($password), 'name' => $name];
        $model::create($Data);
        return $redirectRoute ? $redirectRoute : redirect()->back();
    }
}
