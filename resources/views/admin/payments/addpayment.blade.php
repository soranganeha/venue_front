@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">PAYMENT</a> <a href="#" class="current">ADD PAYMENT</a> </div>
    <h1>PAYMENT</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>ADD PAYMENT</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/addpayment') }}" name="addpayment" id="addpayment" novalidate="novalidate">
            	{{csrf_field()}}
              <div class="control-group">
                <label class="control-label">UserId</label>
                <div class="controls">
                  <input type="text" name="user_id" id="user_id">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Total amount</label>
                <div class="controls">
                  <input type="text" name="total_amount" id="total_amount">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Amount Paid</label>
                <div class="controls">
                  <input type="text" name="amount_paid" id="amount_paid">
                </div>
              </div>
             <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <input type="text" name="status" id="status">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Payment Date</label>
                <div class="controls">
                  <input type="date" name="date" id="date">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Payment" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection