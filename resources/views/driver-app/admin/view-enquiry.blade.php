@extends('driver-app.admin.layouts.app')

@section('content')



<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Enquiry Details</h4>
                        <a href="{{url('all-driver-enquiries')}}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                            
                                <h4 class="text-center">{{$enquiry->driver_trip_type}} Trip</h4>
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{$enquiry->customer_name}}</td>
                                </tr>

                                <tr>
                                    <th>Customer Email</th>
                                    <td>{{$enquiry->customer_email}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile No</th>
                                    <td>{{$enquiry->mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th>Alternate Mobile No</th>
                                    <td>{{$enquiry->alternate_mobile_no}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$enquiry->address}}</td>
                                </tr>
                                <tr>
                                    <th>Pickup Location</th>
                                    <td>{{$enquiry->pickup_location}}</td>
                                </tr>
                                <tr>
                                    <th>Drop Location</th>
                                    <td>{{$enquiry->drop_location}}</td>
                                </tr>
                                <tr>
                                    <th>Pickup Date</th>
                                    <td>{{$enquiry->pickup_date}}</td>
                                </tr>
                                <tr>
                                    <th>Pickup Time</th>
                                    <td>{{$enquiry->pickup_time}}</td>
                                </tr>
                                <tr>
                                <tr>
                                    <th>Package</th>
                                    <td>{{$enquiry->package}}</td>
                                </tr>
                                    <th>Total Distance</th>
                                    <td>{{$enquiry->total_distance}}</td>
                                </tr>
                                <tr>
                                    <th>Ride Type</th>
                                    <td>{{$enquiry->ride_type}}</td>
                                </tr>
                                <tr>
                                    <th>Vehicle Class</th>
                                    <td>{{$enquiry->vehicle_class}}</td>
                                </tr>
                             
                                <tr>
                                    <th>Total Amount</th>
                                    <td>{{$enquiry->total_amount}}</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



@endsection