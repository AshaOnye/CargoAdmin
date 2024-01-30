@extends('layouts.layout')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                                        justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Shipments</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h4 class="card-title mb-4">Shipments</h4>
                        </div>
                        
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>


                                        <th class="align-middle">
                                            ID</th>
                                        <th class="align-middle">
                                            Ship ID</th>
                                        <th class="align-middle">
                                            Client Name</th>
                                        <th class="align-middle">
                                            Store Name</th>
                                        <th class="align-middle">
                                            Tracking ID</th>
                                        <th class="align-middle">
                                            Status</th>
                                        <th class="align-middle">
                                            View Details</th>

                                    </tr>
                                </thead>

                                <tbody>


                                    <tr>
                                        @foreach ($data as $item)

                                        <td><a href="javascript: void(0);"
                                                class="text-body fw-bold">
                                                {{$item->uid}}</a>
                                        </td>
                                        <td>{{$item->shipid}}</td>
                                        <td>
                                        {{$item->fullname}}
                                        </td>
                                        <td>
                                        {{$item->storename}}
                                        </td>
                                        <td>
                                            {{$item->tracking_number}}
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-pill
                                                                   badge-soft-warning
                                                                   font-size-11">Pending</span>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                id="openModalButton" class="btn btn-primary btn-sm
                                                                   btn-rounded waves-effect
                                                                   waves-light"
                                                data-bs-toggle="modal"
                                                data-bs-target=".transaction-detailModal">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>

                            </table>
                            <!-- <div id="myModal" style="display: none;"> Click here</div> -->
                        </div>
                    </div>
                </div>
 <!-- Modal -->
<div class="" tabindex="-1" id="myModal" style="display: none;"
    role="dialog" aria-labelledby=orderdetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id=orderdetailsModalLabel">Order Details
                </h5>
                <button type="button" class="btn-close" id="closeModalButton" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span
                        class="text-primary">SH2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Baby
                        Jay</span></p>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Purchase Store</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Delivery Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                           
                                <th scope="row">
                                    <div>
                                        <h5></h5>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">
                                            </h5>
                                        <!-- <p class="text-muted mb-0"></p> -->
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                           
                            <tr>
                            
                                <th scope="row">
                                    <div>
                                        <h5></h5>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">
                                             </h5>
                                        <!-- <p class="text-muted mb-0"></p> -->
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            
                            <!-- <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeModalButton"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->


            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>




<script>
// Get the modal and the button to open and close it
const modal = document.getElementById('myModal');
const openModalButton = document.getElementById('openModalButton');
const closeModalButton = document.getElementById('closeModalButton');
// Function to show the modal
function openModal() {
    modal.style.display = 'block';
}
// Function to hide the modal
function closeModal() {
    modal.style.display = 'none';
}
// Event listener
openModalButton.addEventListener('click', openModal);
closeModalButton.addEventListener('click', closeModal);
</script>

@endsection