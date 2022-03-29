<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Package(){
        return $this->belongsTo(Package::class);
    }
    public function getExporationDateAttribute($key)
    {
        return Carbon::parse($key)->diffForHumans();
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
