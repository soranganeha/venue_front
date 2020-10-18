@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">PACKAGE</a> <a href="#" class="current">ADD PACKAGE</a> </div>
    <h1>PACKAGE</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>ADD PACKAGE</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-package') }}" name="addpackage" id="addpackage" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">VenueId</label>
                <div class="controls">
                  <input type="text" name="venue_id" id="venue_id">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Package Details</label>
                <div class="controls">
                  <input type="text" name="package_details" id="package_details">
                </div>
              </div>
             <div class="control-group">
                <label class="control-label">Cost</label>
                <div class="controls">
                  <input type="text" name="cost" id="cost">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Package" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection