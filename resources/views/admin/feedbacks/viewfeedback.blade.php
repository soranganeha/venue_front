@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">FEEDBACK</a> <a href="#" class="current">VIEW FEEDBACK</a> </div>
    <h1>Feedback</h1>
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
            <h5>View feedback</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Feedback Id</th>
                  <th>User Id</th>
                  <th>Venue Id</th>
                  <th>Feedbak_details</th>
                  <th>Date</th>
                   <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($feedbacks as $feedback)
                <tr class="gradeX">
                  <td>{{ $feedback->id }}</td>
                  <td>{{ $feedback->user_id }}</td>
                  <td>{{ $feedback->venue_id }}</td>
                  <td>{{ $feedback->feedback_details }}</td>
                  <td>{{ $feedback->date }}</td>
                  <td class="center"><a href="{{url('/admin/editfeedback/'.$feedback->id)}}" class="btn btn-primary btn-mini">EDIT</a><a id="delFed" href="{{url('/admin/deletefeedback/'.$feedback->id)}}" class="btn btn-danger btn-mini">DELETE</a></td>
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