@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">DECORATIONS</a> <a href="#" class="current">EDIT DECORATION</a> </div>
    <h1>DECORATIONS</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>EDIT DECORATION</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/admin/edit-decoration/'.$decorationDetails->id)}}" name="editdecoration" id="editdecoration" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Decoration Type</label>
                <div class="controls">
                  <textarea name="decoration_type" id="decoration_type">{{ $decorationDetails->decoration_type }}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                  <input type="text" name="price" id="price" value="{{ $decorationDetails->price }}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Edit Decoration" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection