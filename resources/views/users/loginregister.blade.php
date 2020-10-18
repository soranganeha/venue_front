@extends('layouts.frontlayout.desing')
@section('content')

<div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Login Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
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
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 st-tabs">
                    <!-- Nav tabs -->
                    <div class="well-box">
                        <h3>Customer Login</h3>
                        <form method="Post" action="{{url('/userlogin')}}">{{csrf_field()}}
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Password<span class="required">*</span></label>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required>
                            </div>
                            <!-- Check Box -->
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" class="agree-term">
                                <label for="remember" class="label-agree-term"><span><span></span></span>Remember Me</label>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                                <a href="{{ url('/forgotpassword') }}" class="pull-right"> <small>Forgot Password ?</small></a>
                            </div>
                        </form>
                    </div>
                    <div class="well-box social-login"> <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn twitter-btn"><i class="fa fa-twitter-square"></i>Twitter</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>
                </div>
                <div class="col-md-6 st-tabs">
                    <!-- Nav tabs -->
                    <div class="well-box">
                        <h3>New Customer Sign Up</h3>
                        <form id="registerForm" name="registerForm" action="{{ url('/userregister')}}" method="POST">
                                {{csrf_field()}}
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">Customer Name<span class="required">*</span></label>
                                <input id="name" name="name" type="text" placeholder="Customer Name" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Password<span class="required">*</span></label>
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Mobile No<span class="required">*</span></label>
                                <input id="mobile_no" name="mobile_no" type="mobile_no" placeholder="Mobile No" class="form-control input-md" required>
                            </div>
                            <!-- Text Area -->
                            <div class="control-group">
                                <label class="control-label">Address<span class="required">*</span></label>
                                <div class="controls">
                                <textarea name="address" id="address" placeholder="Address" class="form-control input-md" required></textarea>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
                                <!-- <a href="forget-password.html" class="pull-right"> <small>Forgot Password ?</small></a> -->
                            </div>
                        </form>
                    </div>
                    <div class="well-box social-login"> <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn twitter-btn"><i class="fa fa-twitter-square"></i>Twitter</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <!-- Footer -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ft-aboutus">
                        <h2>Wedding.Vendor</h2>
                        <p>At Wedding Vendor our purpose is to help people find great online network connecting wedding suppliers and wedding couples who use those suppliers. <a href="#">Start Find Vendor!</a></p>
                        <a href="#" class="btn btn-default">Find a Vendor</a> </div>
                    <div class="col-md-3 ft-link">
                        <h2>Useful links</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 newsletter">
                        <h2>Subscribe for Newsletter</h2>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter E-Mail Address" required>
                                <span class="input-group-btn">
            <button class="btn btn-default" type="button">Submit</button>
            </span> </div>
                            <!-- /input-group -->
                            <!-- /.col-lg-6 -->
                        </form>
                        <div class="social-icon">
                            <h2>Be Social &amp; Stay Connected</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Footer -->
        <div class="tiny-footer">
            <!-- Tiny footer -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">Copyright © 2014. All Rights Reserved</div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/front_js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/front_js/bootstrap.min.js')}}"></script>
        <!-- Flex Nav Script -->
        <script src="{{asset('js/front_js/jquery.flexnav.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/front_js/navigation.js')}}"></script>
        <script src="{{asset('js/front_js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/front_js/header-sticky.js')}}"></script>

@endsection