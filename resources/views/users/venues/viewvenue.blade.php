@extends('layouts.frontlayout.desing')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">VENUES</a> <a href="#" class="current">VIEW VENUES</a> </div>
    <h1>Venues</h1>
   <!--  @if(Session::has('flash_message_error'))
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
    @endif -->
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Venues</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Venue ID</th>
                  <th>Venue Name</th>
                  <th>Venue Address</th>
                  <th>Venue Price</th>
                  <th>Capacity Of People</th>
                  <!-- <th>Actions</th> -->
                </tr>
              </thead>
              <tbody>
              	@foreach($venues as $venue)
                <tr class="gradeX">
                  <td>{{ $venue->id }}</td>
                  <td>{{ $venue->venue_name }}</td>
                  <td>{{ $venue->address }}</td>
                  <td>{{ $venue->price }}</td>
                  <td>{{ $venue->capacity_of_people }}</td>
                  <!-- <td class="center"><a href="{{ url('/admin/edit-venue/'.$venue->id) }}" class="btn btn-primary btn-mini">EDIT</a><a id="delVen" href="{{ url('/admin/delete-venue/'.$venue->id) }}" class="btn btn-danger btn-mini">DELETE</a></td> -->
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