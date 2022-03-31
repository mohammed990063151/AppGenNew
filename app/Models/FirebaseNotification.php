<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirebaseNotification extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Area(){
        return $this->belongsTo(User::class);
    }


    public static function boot(){
        parent::boot();
        static::creating(function($model)
        {
            $model->notification_date = date('y-m-d H:i:s');
        });
    }

        public function getImageAttribute($key)
    {
        return $key ? asset('uploads/notification/'.$key) : asset('uploads/notification/defualt.png');
    }



    public function getNotificationDateAttribute($key)
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    public function app()
    {
    return $this->belongsTo(app::class);
    }

}

