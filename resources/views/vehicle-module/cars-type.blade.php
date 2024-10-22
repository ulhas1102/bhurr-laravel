@extends('layouts.master')
@section('title', 'Cars Types')


@section('backend-page-style')
<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
  th, td {
            white-space: nowrap;
        }
  </style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>Car type list</h4>
                <a href="{{url('add-car-type')}}" class="btn btn-primary">Add Car Type</a>
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example2">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Car Type</th>
                       
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($cartypes as $cartype)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$cartype->car_type}}</td>
                    
                    <td class="d-flex justify-content-between">
                        {{-- <a href="edit-cars-type?car_type_id={{$cartype->car_type_id}}" class="btn btn-primary">Edit</a> --}}
                        <form action="deleteCarTypes" method="POST">
                            @csrf
                            <input type="hidden" name="car_type_id" value="{{$cartype->car_type_id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="footer-wrap">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://webwideit.solutions/" target="_blank">Web wide It solution Pune </a>2024</span>
          
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('success'))
  <script>
      Swal.fire({
          title: 'Thank you!',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
  @endif
@endsection