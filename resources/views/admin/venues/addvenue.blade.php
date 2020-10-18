@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">VENUES</a> <a href="#" class="current">ADD VENUE</a> </div>
    <h1>VENUES</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>ADD VENUE</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-venue') }}" name="addvenue" id="addvenue" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Venue Name</label>
                <div class="controls">
                  <input type="text" name="venue_name" id="venue_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                  <textarea name="address" id="address"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                  <input type="text" name="price" id="price">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Capacity of People</label>
                <div class="controls">
                  <input type="text" name="capacity_of_people" id="capacity_of_people">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Venue" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection