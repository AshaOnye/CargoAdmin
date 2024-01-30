@extends('layouts.layout')

@section('content')

        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0 font-size-18">Invoice List</h4>
      
                  <div class="float-end"><a
                                href="{{ route('quotation.create') }}"
                                class="btn btn-dark btn-sm">Create New</a></div>
                </div>
              </div>
            </div>
            <!-- end page title -->
      
            <div class="row">
             
              @foreach($quotations as $quotation)

              <div class="col-xl-4 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="text-lg-center">
                          <img
                            src="assets/images/users/favicon2.png"
                            class="avatar-sm me-3 mx-lg-auto mb-3 mt-1 float-start float-lg-none rounded-circle"
                            alt="img"
                          />
                          <h5 class="mb-1 font-size-15 text-truncate">
                          {{ $quotation['bill_name'] }}
                          </h5>
                          <a href="javascript: void(0);" class="text-muted">User</a>
                        </div>
                      </div>
      
                      <div class="col-lg-8">
                        <div>
                          <a
                            href="{{ route('quotation.detail', ['id' => $quotation['order_id']]) }}"
                            class="d-block text-primary text-decoration-underline mb-2"
                            >Invoice #  {{ $quotation['order_id'] }}</a
                          >
                          <h5 class="text-truncate mb-4 mb-lg-5">
                            Bill of Quantity
                          </h5>
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item me-3">
                              <h5
                                class="font-size-14"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Amount"
                              >
                                <i class="bx bx-money me-1 text-muted"></i> {{ $quotation['price'] }}
                              </h5>
                            </li>
                            <li class="list-inline-item">
                              <h5
                                class="font-size-14"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Due Date"
                              >
                                <i class="bx bx-calendar me-1 text-muted"></i> {{ $quotation['datetime'] }}
                              </h5>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach


            </div>
            <!-- end row -->
      
            <div class="row">
              <div class="col-12">
                <div class="text-center my-3">
                  <a href="javascript:void(0);" class="text-success"
                    ><i
                      class="bx bx-loader bx-spin font-size-18 align-middle me-2"
                    ></i>
                    Load more
                  </a>
                </div>
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
 
@endsection