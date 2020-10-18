<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package;

class PackageController extends Controller
{
    public function addpackage(Request $request){
    	if($request->isMethod('post')){
    	$data = $request->all();
    	//echo "<pre>"; print_r($data); die;
    	$package = new package;
    	$package->venue_id = $data['venue_id'];
    	$package->package_details = $data['package_details'];
    	$package->cost = $data['cost'];
    	$package->save();   
    	return redirect('/viewpackages')->with('flash_message_success','Package added successfully');
    }
    	return view('admin.package.addpackage');
    }

    public function editpackage(Request $request, $id =null){
    		if($request->isMethod('post')){
    			$data = $request->all();
    			//echo "<pre>";print_r($data); die;
    			Package::where(['id'=>$id])->update(['venue_id'=>$data['venue_id'],'package_details'=>$data['package_detail'],'cost'=>$data['cost']]);
    			return redirect('/viewpackages')->with('flash_message_success','package updated successfully');
    		}
    	$packageDetails = Package::where(['id'=>$id])->first();
    	return view('admin.package.editpackage')->with(compact('packageDetails'));
    }

    	public function deletepackage(Request $request, $id = null){
    		if(!empty($id)){
    			Package::where(['id'=>$id])->delete();
    			return redirect()->back()->with('flash_message_success','Package delete successfully');
    		}
    	}

 	public function viewpackage(Request $request){
 		$packages = Package::get();
 		return view('admin.package.viewpackage')->with(compact('packages'));
 	}
}
