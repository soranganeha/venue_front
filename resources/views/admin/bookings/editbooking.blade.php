@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">BOOKING</a> <a href="#" class="current">EDIT BOOKING</a> </div>
    <h1>BOOKING</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>EDIT BOOKING</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/editbooking/'.$bookingDetails->id)}}" name="editbooking" id="editbooking" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">User id</label>
                <div class="controls">
                <input type="text" name="user_id" id="user_id" value="{{ $bookingDetails->user_id}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Venue id</label>
                <div class="controls">
                  <input type="text" name="venue_id" id="venue_id" value="{{ $bookingDetails->venue_id }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Package id</label>
                <div class="controls">
                  <input type="text" name="package_id" id="package_id" value="{{ $bookingDetails->package_id }}">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Booking cost</label>
                <div class="controls">
                  <input type="text" name="booking_cost" id="booking_cost" value="{{ $bookingDetails->booking_cost }}">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Decoration id</label>
                <div class="controls">
                  <input type="text" name="decoration_id" id="decoration_id" value="{{ $bookingDetails->decoration_id }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Cateringes id</label>
                <div class="controls">
                  <input type="text" name="cateringes_id" id="cateringes_id" value="{{ $bookingDetails->cateringes_id }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Date</label>
                <div class="controls">
                  <input type="date" name="date" id="date" value="{{ $bookingDetails->date }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Time_slot</label>
                <div class="controls">
                  <input type="time" name="time_slot" id="time_slot" value="{{ $bookingDetails->time_slot }}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Booking" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection