@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">CATERINGES</a> <a href="#" class="current">EDIT CATERING</a> </div>
    <h1>CATERINGES</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>EDIT CATERING</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/edit-catering/'.$cateringDetails->id)}}" name="editCatreing" id="editCatering" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Service</label>
                <div class="controls">
                  <input type="text" name="service" id="service" value="{{ $cateringDetails->service }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Catering Type</label>
                <div class="controls">
                  <textarea name="catering_type" id="catering_type">{{ $cateringDetails->catering_type }}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                  <input type="text" name="price" id="price" value="{{ $cateringDetails->price }}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Catreing" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection