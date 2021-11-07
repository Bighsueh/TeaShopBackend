<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    public function show()
    {
        return Items::all()->toJson();

    }
}
