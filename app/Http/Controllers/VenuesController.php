<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Venues;

class VenuesController extends Controller
{
    public function addVenue(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		$venue = new Venues;
    		$venue->venue_name = $data['venue_name'];
    		$venue->address = $data['address'];
    		$venue->price = $data['price'];
    		$venue->capacity_of_people = $data['capacity_of_people'];
    		$venue->save();
    		return redirect('/admin/viewvenues')->with('flash_message_success','Venue Added Successfully!!!!');
    	}
    	return view('admin.venues.addvenue');
    }

    public function editVenue(Request $request,$id = null){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		Venues::where(['id'=>$id])->update(['venue_name'=>$data['venue_name'],'address'=>$data['address'],'price'=>$data['price'],'capacity_of_people'=>$data['capacity_of_people']]);
    		return redirect('/admin/viewvenues')->with('flash_message_success','Venue Updated Successfully!!!!');
    	}
    	$venueDetails = Venues::where(['id'=>$id])->first();
    	return view('admin.venues.editvenue')->with(compact('venueDetails'));
    }

    public function deleteVenue($id = null){
    	if (!empty($id)) {
    		Venues::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_success','Venue Deleted Successfully!!!!');
    	}
    }

    public function viewVenues(){
    	$venues = Venues::get();
    	$venues = json_decode(json_encode($venues));
    	return view('admin.venues.viewvenue')->with(compact('venues'));
    }
}
