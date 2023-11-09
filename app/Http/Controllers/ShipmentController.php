<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipments;

class ShipmentController extends Controller
{
    //

    public function index()
    {
        $data = Shipments::all();
        // dd($data);
        return view('shipments.index',['data'=>$data]);
    }
}
