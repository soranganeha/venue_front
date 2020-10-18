@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">BOOKING</a> <a href="#" class="current">VIEW BOOKING</a> </div>
    <h1>Booking</h1>
    @if(Session::has('flash_message_error'))
      <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert"></button> 
          <strong>{!! session('flash_message_error') !!}</strong>
      </div>
    @endif
    @if(Session::has('flash_message_success'))
      <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert"></button> 
          <strong>{!! session('flash_message_success') !!}</strong>
      </div>
    @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Booking</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Payment Id</th>
                  <th>User Id</th>
                  <th>Venue Id</th>
                  <th>Package Id</th>
                  <th>Booking Cost</th>
                  <th>Decoration Id</th>
                  <th>Cateringes Id</th>
                  <th>Date</th>
                  <th>Time Slot</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($bookings as $booking)
                <tr class="gradeX">
                  <td>{{ $booking->id }}</td>
                  <td>{{ $booking->user_id }}</td>
                  <td>{{ $booking->venue_id }}</td>
                  <td>{{ $booking->package_id }}</td>
                  <td>{{ $booking->booking_cost }}</td>
                  <td>{{ $booking->decoration_id }}</td>
                  <td>{{ $booking->cateringes_id }}</td>
                  <td>{{ $booking->date }}</td>
                  <td>{{ $booking->time_slot }}</td>
                  <td class="center"><a href="{{url('/admin/editbooking/'.$booking->id)}}" class="btn btn-primary btn-mini">EDIT</a><a id="delBok" href="{{url('/admin/deletebooking/'.$booking->id)}}" class="btn btn-danger btn-mini">DELETE</a></td>
                </tr>                
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection