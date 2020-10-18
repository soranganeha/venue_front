<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function addbooking(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		$booking = new Booking;
    		$booking->user_id = $data['user_id'];
    		$booking->venue_id = $data['venue_id'];
    		$booking->package_id = $data['package_id'];
    		$booking->booking_cost = $data['booking_cost'];
    		$booking->decoration_id = $data['decoration_id'];
    		$booking->cateringes_id = $data['cateringes_id'];
    		$booking->date = $data['date'];
    		$booking->time_slot = $data['time_slot'];
    		$booking->save();
    		return redirect('/viewbookings')->with('flash_message_success','Booking added successfully');
    	}
    	return view('users.bookings.addbooking');
    }

    public function editBooking(Request $request, $id = null){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);
    		Booking::where(['id'=>$id])->update(['user_id'=>$data['user_id'],'venue_id'=>$data['venue_id'],'package_id'=>$data['package_id'],'booking_cost'=>$data['booking_cost'],'decoration_id'=>$data['decoration_id'],'cateringes_id'=>$data['cateringes_id'],'date'=>$data['date'],'time_slot'=>$data['time_slot']]);
    		return redirect('/viewbookings')->with('flash_message_error','Booking edited sucessfully');
    	}
    	$bookingDetails = Booking::where(['id'=>$id])->first();
    	return view('admin.bookings.editbooking')->with(compact('bookingDetails'));
    }

    public function deleteBooking(Request $request, $id = null){
    	//echo $id; die;
    	if(!empty($id)){
    		Booking::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_error','Booking delete sucessfully');
    	}
    }

    public function viewBooking(){
    	$bookings = Booking::get();
    	$bookings = json_decode(json_encode($bookings));
    	//echo "<pre>"; print_r($bookings); die;
    	return view('admin.bookings.viewbooking')->with(compact('bookings'));
    }
}
