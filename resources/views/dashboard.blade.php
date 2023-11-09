@extends('layouts.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                                        justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Admin Dashboard</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            Total Shipments</p>
                                        <h4 class="mb-0">0</h4>
                                    </div>

                                    <div
                                        class="flex-shrink-0 align-self-center">
                                        <div
                                            class="mini-stat-icon avatar-sm
                                                                rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i
                                                    class="bx bx-copy-alt
                                                                        font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            Pending Shipments</p>
                                        <h4 class="mb-0">0
                                        </h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center
                                                            ">
                                        <div
                                            class="avatar-sm rounded-circle
                                                                bg-primary mini-stat-icon">
                                            <span
                                                class="avatar-title
                                                                    rounded-circle">
                                                <i
                                                    class="bx bx-archive-in
                                                                        font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            Total Revenue</p>
                                        <h4 class="mb-0">0</h4>
                                    </div>

                                    <div
                                        class="flex-shrink-0 align-self-center">
                                        <div
                                            class="avatar-sm rounded-circle
                                                                bg-primary mini-stat-icon">
                                            <span
                                                class="avatar-title
                                                                    rounded-circle">
                                                <i
                                                    class="bx
                                                                        bx-purchase-tag-alt
                                                                        font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->



            </div>
            <!-- <div class="col-xl-12">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Your UK Freight Address
                        </h4>
                        <div class="row">
                            <p>225 Littleton Road, Salford, Manchester.</p>
                            <p>Post Code:M7 3TJ</p>
                        </div>
                        <p class="text-muted mb-0">Use this address as your
                            shipping address!</p>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- end row -->




    </div>
    <!-- container-fluid -->
</div>
@endsection