<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketmassege extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tickets',
        'text',
        'ticket_id',
        'sender',
      
    ];
    public function Topic(){
return $this->belongsTo(Topic::class);
    }
    
}


