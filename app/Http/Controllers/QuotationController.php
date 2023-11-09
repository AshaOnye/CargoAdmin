<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billings;
use Auth;

class QuotationController extends Controller
{
    //

    public function create()
    {
        return view('quotation.create');
    }

    public function index()
    {
        // $bill = Billings::where(Auth::user()->id)->get();
        return view('quotation.index');
    }

    public function billing()
    {
        
        $billing = new billings();
        $billing->id();
        // $billing->shipid = request('shipid');
        $billing->fullname = request('fullname');
        $billing->storename = request('storename');
        $billing->tracking_number = request('tracking_number');
        $billing->order_number = request('order_number');
        $billing->package_from = request('package_from');
        $billing->package_to = request('package_to');
        $billing->upload = request('upload');
        $billing->package_descp = request('package_descp');
        $billing->delivery_option = request('delivery_option');
        $billing->datetime=date('Y-m-d H:i:s');

        $billing->save();

        return view ('/quotation.index');
    }
}
