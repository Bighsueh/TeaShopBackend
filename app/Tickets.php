<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = "tickets";
    protected $fillable = [
        'id', 'ticket_id', 'items', 'total'
    ];
}
