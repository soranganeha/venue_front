@extends('layouts.adminlayout.admindesign')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">PAYMENT</a> <a href="#" class="current">VIEW PAYMENT</a> </div>
    <h1>Payment</h1>
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
            <h5>View Payment</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Payment Id</th>
                  <th>User Id</th>
                  <th>Total Amount</th>
                  <th>Amount Paid</th>
                  <th>Status</th>
                  <th>Payment Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($payments as $payment)
                <tr class="gradeX">
                  <td>{{ $payment->id }}</td>
                  <td>{{ $payment->user_id }}</td>
                  <td>{{ $payment->total_amount }}</td>
                  <td>{{ $payment->amount_paid }}</td>
                  <td>{{ $payment->status }}</td>
                  <td>{{ $payment->date }}</td>
                  <td class="center"><a href="{{url('/admin/editpayment/'.$payment->id)}}" class="btn btn-primary btn-mini">EDIT</a><a id="delPay" href="{{url('/admin/deletepayment/'.$payment->id)}}" class="btn btn-danger btn-mini">DELETE</a></td>
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