@extends('layouts.layout')

@section('content')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Invoice Detail</h4>

                                    <!-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="">Cargomax</a></li>
                                            <li class="breadcrumb-item active">Invoices</li>
                                        </ol>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="invoice-title">
                                            <h4 class="float-end font-size-16">Ship ID {{ $billing->order_id }}</h4>
                                            <div class="mb-4">
                                                <img src="assets/images/users/favicon2.png" alt="logo" height="40"/>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <address>
                                                    <strong>Billed To:</strong><br>
                                                    {{ $billing->bill_name }}<br>
                                                    {{$billing->address}}
                                                </address>
                                            </div>
                                            <div class="col-sm-6 text-sm-end">
                                                <address class="mt-2 mt-sm-0">
                                                    <strong>Shipped To:</strong><br>
                                                    {{ $billing->address }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mt-3">
                                                <address>
                                                    <strong>Email:</strong><br> <!--changed payment to email but I'm not changing the table name on the DB -->
                                                    {{ $billing->payment }}
                                                </address>
                                            </div>
                                            <div class="col-sm-6 mt-3 text-sm-end">
                                                <address>
                                                    <strong>Order Date:</strong><br>
                                                    {{ $billing->datetime }}<br><br>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="py-2 mt-3">
                                            <h3 class="font-size-15 fw-bold">Order summary</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 70px;">No.</th>
                                                        <th>Item</th>
                                                        <th class="text-end">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    
                                                        <td>01</td>
                                                        
                                                        <td>{{$billing->order_descp}}</td>
                                                        <td class="text-end">{{$billing->price}}</td>
                                                    </tr>
                                                    
                                                    

                                                    
                                                    <tr>
                                                        <td colspan="2" class="text-end">Sub Total</td>
                                                        <td class="text-end">{{$billing->total}}</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td colspan="2" class="border-0 text-end">
                                                            <strong>Shipping</strong></td>
                                                        <td class="border-0 text-end">$13.00</td>
                                                    </tr> -->
                                                    <tr>
                                                        <td colspan="2" class="border-0 text-end">
                                                            <strong>Total</strong></td>
                                                        <td class="border-0 text-end"><h4 class="m-0">{{$billing->total}}</h4></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                                <a href="javascript: void(0);" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>

@endsection