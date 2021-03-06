@extends('layouts.frontlayout.desing')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">CATERINGS</a> <a href="#" class="current">VIEW CATERINGES</a> </div>
    <h1>Cateringes</h1>
    <!-- @if(Session::has('flash_message_error'))
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
            <h5>View Cateringes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Catering ID</th>
                  <th>Catering Service</th>
                  <th>Catering Type</th>
                  <th>Catering Price</th>
                  <!-- <th>Actions</th> -->
                </tr>
              </thead>
              <tbody>
              	@foreach($cateringes as $catering)
                <tr class="gradeX">
                  <td>{{ $catering->id }}</td>
                  <td>{{ $catering->service }}</td>
                  <td>{{ $catering->catering_type }}</td>
                  <td>{{ $catering->price }}</td>
                  <!-- <td class="center"><a href="{{url('/admin/edit-catering/'.$catering->id)}}" class="btn btn-primary btn-mini">EDIT</a><a id="delVen" href="{{url('/admin/delete-catering/'.$catering->id)}}" class="btn btn-danger btn-mini">DELETE</a></td> -->
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