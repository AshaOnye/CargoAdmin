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
        $quotations = Billings::all(); // This fetches all records, adjust as needed

        return view('quotation.index', ['quotations'=> $quotations]);
    }
    public function show($id){

   // $billing = Billings::find($id);
    $billing = Billings::where('order_id', $id)->first();

    if (!$billing) {
        abort(404);
    }

    return view('quotation.detail', ['billing' => $billing]);
}

    public function billing(Request $request)
    {
       
        $request->validate([
            'bill_name' => ['required', 'string', 'max:255'],
            'payment' => ['required', 'string', 'max:255']
        ]);

        Billings::create([
            'bill_name' => $request->bill_name,
            'order_id' => $request->order_id,
            'address' => $request->address,
            'payment' => $request->payment,
            'order_date' => $request->order_date,
            'delivery_option' => $request->delivery_option,
            'price' => $request->price,
            'total' => $request->total,
            'order_descp' => $request->order_descp,
            'datetime' => date('Y-m-d H:i:s'),
            
            
        ]);

        return redirect('/quotations')->with("message", "Quatation  created successfully!");
       
        // dd($request->all());
        /*
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
        */

        return view ('/quotation.index');
    }
}
