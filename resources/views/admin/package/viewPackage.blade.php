@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">PACKAGE</a> <a href="#" class="current">VIEW PACKAGE</a> </div>
    <h1>Package</h1>
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
            <h5>View Package</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Package Id</th>
                  <th>Venue Id</th>
                  <th>Package Details</th>
                  <th>Cost</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($packages as $package)
                <tr class="gradeX">
                  <td>{{ $package->id }}</td>
                  <td>{{ $package->venue_id }}</td>
                  <td>{{ $package->package_details }}</td>
                  <td>{{ $package->cost }}</td>
                  <td class="center"><a href="{{url('/admin/edit-package/'.$package->id)}}" class="btn btn-primary btn-mini">EDIT</a><a id="delPac" href="{{url('/admin/delete-packages/'.$package->id)}}" class="btn btn-danger btn-mini">DELETE</a></td>
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