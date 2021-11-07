<?php

namespace App\Http\Controllers;

use App\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function show()
    {
        $data =  Tickets::all()->toJson();
        return $data;
    }

    public function store($id,$items,$total)
    {
        DB::table('tickets')->insert(
            ['ticket_id' =>$id,
                'items' =>$items,
                'total' =>$total]
        );
    }
}
