<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
      'topicname',
    ];
    public function TicketMassege()
    {
    return $this->hasMany(Ticketmassege::class);
}
}
