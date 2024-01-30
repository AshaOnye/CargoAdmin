<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;

class ParcelController extends Controller
{
    public function createForm()
    {
        return view('create-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'trackingId' => 'required|string',
            'shipmentType' => 'required|string',
            'senderInfo' => 'required|json',
            'receiverInfo' => 'required|json',
            'itemDetails' => 'required|json',
        ]);

        Parcel::create($request->all());

        return redirect()->route('create-form')->with('success', 'Parcel created successfully!');
    }
}
