@extends('vendor-layouts.master')
@section('title', 'Add Vendor')

@section('backend-page-style')
<style>
    .card-header {
        background-color: #5650ce40;
        color: black;
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row justify-content-center mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Add Car Details</h4>
            </div>
            <div class="card-body">
                <form id="carDetailsForm" action="addCarDetails" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="vendor_id" id="vendor_id" value="{{ Auth::guard('vendor')->user()->id }}">
                    <div id="carDetailsContainer">
                        <div class="car-details">
                            <div class="form-group mt-3">
                                <label for="car_registration">Car Name</label>
                                <input type="text" class="form-control" placeholder="Enter car name" name="car_name[0]" required>
                            </div>
                            <div class="form-group">
                                <label for="car_type">Type of Vehicle</label>
                                <select name="car_type[0]" class="form-control" required>
                                    <option value="">-- Select car type --</option>
                                    @foreach($cartypes as $cartype)
                                    <option value="{{ $cartype->car_type }}">{{ $cartype->car_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="car_class">Class</label>
                                <select name="car_class[0]" class="form-control" required>
                                    <option value="">-- Select car class --</option>
                                    @foreach($carclasses as $carclass)
                                    <option value="{{ $carclass->car_class }}">{{ $carclass->car_class }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_of_cars_quantity">No. of Cars</label>
                                <input type="number" class="form-control no-of-cars-quantity" id="no_of_cars_quantity_0" placeholder="No of cars" name="no_of_cars_quantity[0]" required>
                            </div>
                            <div class="additional-registration-numbers"></div>
                        </div>
                    </div>
                    <button type="button" id="addCarDetails" class="btn btn-primary">Add More Car Details</button>
                    <br><br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="footer-wrap">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://webwideit.solutions/" target="_blank">Web wide It solution Pune </a>2024</span>
          </div>
        </div>
      </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
  <script>
    $(document).ready(function () {
        $('#tabledata').DataTable();

        function addCarDetailsSection(index = null) {
            var carDetails = `
            <div class="car-details">
                <div class="form-group mt-3">
                    <label for="car_registration">Car Name</label>
                    <input type="text" class="form-control" placeholder="Enter car name" name="car_name[${index}]" required>
                </div>
                <div class="form-group">
                    <label for="car_type">Type of vehicle</label>
                    <select name="car_type[${index}]" class="form-control" required>
                        <option value="">-- Select car type --</option>
                        @foreach($cartypes as $cartype)
                        <option value="{{ $cartype->car_type }}">{{ $cartype->car_type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="car_class">Car class</label>
                    <select name="car_class[${index}]" class="form-control" required>
                        <option value="">-- Select car class --</option>
                        @foreach($carclasses as $carclass)
                        <option value="{{ $carclass->car_class }}">{{ $carclass->car_class }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_of_cars_quantity">No. of Cars</label>
                    <input type="number" class="form-control no-of-cars-quantity" id="no_of_cars_quantity_${index}" placeholder="No of cars" name="no_of_cars_quantity[${index}]" required>
                </div>
                <div class="additional-registration-numbers"></div>
                <button type="button" class="removeCarDetails mb-3 btn btn-danger">Remove</button>
            </div>
            `;
            $('#carDetailsContainer').append(carDetails);
        }

        $('#addCarDetails').click(function () {
            var index = $('.car-details').length;
            addCarDetailsSection(index);
        });

        $(document).on('click', '.removeCarDetails', function () {
            $(this).closest('.car-details').remove();
        });

        $(document).on('input', '.no-of-cars-quantity', function () {
            var numOfCars = $(this).val();
            var parentIndex = $(this).closest('.car-details').index();
            var $additionalRegNumbersContainer = $(this).closest('.car-details').find('.additional-registration-numbers');

            $additionalRegNumbersContainer.empty();
            for (var i = 0; i < numOfCars; i++) {
                $additionalRegNumbersContainer.append(`
                    <div class="form-group">
                        <label for="additional_registration">Car Registration Number</label>
                        <input type="text" class="form-control" placeholder="Enter Car registration number" name="additional_registration[${parentIndex}][]" required>
                    </div>
                `);
            }
        });
    });
  </script>
@endsection
