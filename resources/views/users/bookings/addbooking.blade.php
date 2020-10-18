@extends('layouts.frontlayout.desing')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">BOOKING</a> <a href="#" class="current">ADD BOOKING</a> </div>
    <h1>BOOKING</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>ADD BOOKING</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/addbooking') }}" name="addbooking" id="addbooking" novalidate="novalidate">
            	{{csrf_field()}}
              <!-- Text input -->
              <div class="control-group">
                <label class="control-label">User Id <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="user_id" id="user_id" placeholder="User Id" class="form-control input-md" required>
                </div>
              </div>
              <!-- Text input -->
              <div class="control-group">
                <label class="control-label">Venue Id <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="venue_id" id="venue_id" placeholder="Venue Id" class="form-control input-md" required>
                </div>
              </div>
              <!-- Text input -->
              <div class="control-group">
                <label class="control-label">Package Id <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="package_id" id="package_id" placeholder="Package Id" class="form-control input-md" required>
                </div>
              </div>
              <!-- Text input -->
              <div class="control-group">
                <label class="control-label">Decoration Id <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="decoration_id" id="decoration_id" placeholder="Decoration Id" class="form-control input-md" required>
                </div>
              </div>
              <!-- Text input -->
               <div class="control-group">
                <label class="control-label">Catering Id <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="cateringes_id" id="cateringes_id" placeholder="Catering Id" class="form-control input-md" required>
                </div>
                <!-- Text input -->
             <div class="control-group">
                <label class="control-label">Booking cost <span class="required">*</span></label>
                <div class="controls">
                  <input type="text" name="booking_cost" id="booking_cost" placeholder="Booking Cost" class="form-control input-md" required>
                </div>
              </div>
              <!-- Date input -->
              </div> <div class="control-group">
                <label class="control-label">Date</label>
                <div class="controls">
                  <input type="date" name="date" id="date">
                </div>
              </div>
              <!-- Time slot input -->
               <div class="control-group">
                <label class="control-label">Time_slot</label>
                <div class="controls">
                  <input type="time" name="time_slot" id="time_slot">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Submit Booking" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection