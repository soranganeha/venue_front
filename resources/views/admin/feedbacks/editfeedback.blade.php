@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">FEEDBACK</a> <a href="#" class="current">EDIT FEEDBACK</a> </div>
    <h1>FEEDBACK</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>EDIT FEEDBACK</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/editfeedback/'.$feedbackDetails->id)}}" name="editfeedback" id="editfeedback" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">User id</label>
                <div class="controls">
                <input type="text" name="user_id" id="user_id" value="{{ $feedbackDetails->user_id}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Venue_id</label>
                <div class="controls">
                  <input type="text" name="venue_id" id="venue_id" value="{{ $feedbackDetails->venue_id }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Feedback_details</label>
                <div class="controls">
                  <input type="text" name="feedback_details" id="feedback_details" value="{{ $feedbackDetails->feedback_details }}">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Date</label>
                <div class="controls">
                  <input type="text" name="date" id="date" value="{{ $feedbackDetails->date }}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Feedback" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection