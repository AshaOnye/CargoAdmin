@extends('layouts.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div
                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create Quotation</h4>



                </div>
            </div>
        </div>
        <!-- end page title -->



        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Quotation Form</h4>
                <p class="card-title-desc"></p>

                <form class="custom-validation" action="/create" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Billed to(please provide the client name)</label>
                            <input type="text" name="bill_name"
                                class="form-control" required
                                placeholder="enter full name" />
                        </div>
                        <div class=" col-md-6 col-sm-6  mb-3">
                            <label class="form-label">Order ID(enter CargoMax ID)</label>
                            <input type="text" class="form-control"
                                name="order_id" required
                                placeholder="enter store name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address"
                                class="form-control" required
                                placeholder="tracking number" />
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Payment Method </label>
                            <input type="text" name="payment"
                                class="form-control" required
                                placeholder="enter order id" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Order Date</label>
                            <input type="date" name="order_date"
                                class="form-control" required />
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Price</label>
                            <input type="date" name="price"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">total</label>
                            <input type="text" name="total"
                                 class="form-control"/>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-3">
                            <label class="form-label">Delivery Option</label>
                            <div>
                                <select class="form-control"
                                    name="delivery_option">
                                    <option>Home Delivery</option>
                                    <option>Branch Pickup</option>
                                </select>
                            </div>

                        </div>
                        
                            <div class="col-md-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Order
                                        Description</label>
                                    <textarea required class="form-control"
                                        name="order_descp" rows=""></textarea>
                                </div>
                            </div>
                        
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        <button type="reset"
                            class="btn btn-secondary waves-effect">
                            Cancel
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection