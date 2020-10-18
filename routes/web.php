<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Regiser- Login Page
Route::get('/regiser-login', 'UsersController@UserRegiserLogin');

//Register Login for user 
Route::post('/userregister','UsersController@userLoginRegister');

// Users Register Form Submit
Route::post('/userlogin','UsersController@Loginuser');

//Users Forgot Password
Route::get('/forgotpassword', 'UsersForgotPasswordController@forgot');
Route::post('/forgotpassword', 'UsersForgotPasswordController@password');

//Route::match(['GET','POST'],'/loginregister','UsersController@register');

//User Venues
Route::get('/viewvenues','UsersVenueController@UsersviewVenues');

//User Cateringes
Route::get('/viewcateringes','UsersCateringController@UsersviewCateringes');

//User Decorations

Route::get('/viewdecorations','UsersDecorationController@UsersviewDecorations');

//User Packages
Route::get('/viewpackages','UsersPackageController@UsersviewPackages');


//User feedback
Route::match(['get','post'],'/addfeedback','FeedbackController@addfeedback');

//User Booking
Route::match(['get','post'],'/addbooking','BookingController@addbooking');

//User Payment
Route::match(['get','post'],'/addpayment','PaymentController@addpayment');

Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check_pwd','AdminController@checkpassword');
	Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

	//Venues Route(Admin)
	Route::match(['get','post'],'/admin/add-venue','VenuesController@addVenue');
	Route::match(['get','post'],'/admin/edit-venue/{id}','VenuesController@editVenue');
	Route::match(['get','post'],'/admin/delete-venue/{id}','VenuesController@deleteVenue');
	Route::get('/admin/viewvenues','VenuesController@viewVenues');

	//Catering Route(Admin)
	Route::match(['get','post'],'/admin/add-catering','CateringesController@addCatering');
	Route::match(['get','post'],'/admin/edit-catering/{id}','CateringesController@editCatering');
	Route::match(['get','post'],'/admin/delete-catering/{id}','CateringesController@deleteCatering');
	Route::get('/admin/viewcateringes','CateringesController@viewCateringes');
		
	//Decoration Route(Admin)
	Route::match(['get','post'],'/admin/add-decoration','DecorationsController@addDecoration');
	Route::match(['get','post'],'/admin/edit-decoration/{id}','DecorationsController@editDecoration');
	Route::match(['get','post'],'/admin/delete-decoration/{id}','DecorationsController@deleteDecoration');
	Route::get('/admin/viewdecorations','DecorationsController@viewDecorations');

	//Package Route(Admin)
	Route::match(['get','post'],'/admin/add-package','PackageController@addpackage');
	Route::match(['get','post'],'/admin/edit-package/{id}','PackageController@editpackage');
	Route::match(['get','post'],'/admin/delete-packages/{id}','PackageController@deletepackage');
	Route::get('/admin/viewpackages','PackageController@viewpackage'); 

	//Payment Route(Admin)
	// Route::match(['get','post'],'/admin/addpayment','PaymentController@addpayment');
	Route::match(['get','post'],'/admin/editpayment/{id}','PaymentController@editpayment');
	Route::match(['get','post'],'/admin/deletepayment/{id}','PaymentController@deletepayment');
	Route::get('/viewpayments','PaymentController@viewpayment');

	//Feedback Route(Admin)
	// Route::match(['get','post'],'/admin/addfeedback','FeedbackController@addfeedback');
	Route::match(['get','post'],'/admin/editfeedback/{id}','FeedbackController@editfeedback');
	Route::match(['get','post'],'/admin/deletefeedback/{id}','FeedbackController@deletefeedback');
	Route::get('/viewfeedbacks','FeedbackController@viewfeedback');

	//Booking Route(Admin)
	// Route::match(['get','post'],'/admin/addbooking','BookingController@addbooking');
	Route::match(['get','post'],'/admin/editbooking/{id}','BookingController@editbooking');
	Route::match(['get','post'],'/admin/deletebooking/{id}','BookingController@deletebooking');
	Route::get('/viewbookings','BookingController@viewbooking');

});

Route::get('/logout','AdminController@logout');

