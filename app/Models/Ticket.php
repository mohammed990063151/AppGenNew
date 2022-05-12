<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
   
   
    protected $fillable = [
        'text',
        'ticketmassge_id',
        'date',   
        'admin_id',
        'Created_by',
        'subject',
        'status',
        'sender',
        'topic_id',



    ];
   
    public function Ticketmassege()
    {
    return $this->hasMany(Ticketmassege::class, 'ticket_id');
    }
    // public function ()
    // {
    //     return $this->belongsTo(User::class,'sender');
    // }

    public function ticket()
    {
    return $this->belongsTo('App\Models\Ticketmassege');
    }
   
    // public function topic()
    // {
    // return $this->belongsTo('App\Models\topic');
    // }
    
    // public function getCreatedAtAttribute($key){
    //     Carbon::parse($key)->diffForHumans();
    // }

    public function User()
    {
    return $this->belongsTo(User::class , 'sender');
    }
    public function Topic(){
        return $this->belongsTo(Topic::class,'topic_id');
            }
            #acsseson............................
            public function getCreatedAtAttribute($key)
            {
                return Carbon::parse($key)->diffForHumans();
            }
        }  
          
            
   
    


    


