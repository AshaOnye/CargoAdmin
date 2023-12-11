<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billings;
// use Auth;

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
        dd($request->all());
        
        $billing = new billings();
        // $billing->id();
        // $billing->shipid = request('shipid');
        $billing->bill_name = request('bill_name');
        $billing->order_id = request('order_id');
        $billing->address = request('address');
        $billing->payment = request('payment');
        $billing->order_date = request('order_date');
        $billing->delivery_option = request('delivery_option');
        $billing->price = request('price');
        $billing->total = request('total');
        $billing->order_descp = request('order_descp');
        $billing->datetime=date('Y-m-d H:i:s');
        dd($billing);

        $billing->save();

        return view ('/quotation.index');
    }
}
