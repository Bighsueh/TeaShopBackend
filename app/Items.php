<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = [
        'id', 'item', 'price', 'size','type'
    ];
}
