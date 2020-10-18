<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cateringes;

class CateringesController extends Controller
{
    public function addCatering(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		$catering = new Cateringes;
    		$catering->service = $data['service'];
    		$catering->catering_type = $data['catering_type'];
    		$catering->price = $data['price'];
    		$catering->save();
    		return redirect('/viewcateringes')->with('flash_message_success','Catering Added Successfully!!!!');
    	}
    	return view('admin.cateringes.addCatering');
    }

    public function editCatering(Request $request, $id = null){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		Cateringes::where(['id'=>$id])->update(['service'=>$data['service'],'catering_type'=>$data['catering_type'],'price'=>$data['price']]);
    		return redirect('/viewcateringes')->with('flash_message_success','Catering Updated Successfully!!!!');
    	}
    	$cateringDetails = Cateringes::where(['id'=>$id])->first();
    	return view('admin.cateringes.editCatering')->with(compact('cateringDetails'));
    }

    public function deleteCatering($id = null){
    	if (!empty($id)) {
    		Cateringes::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_success','Catering Deleted Successfully!!!!');
    	}
    }

    public function viewCateringes(){
    	$cateringes = Cateringes::get();
    	return view('admin.cateringes.viewCatering')->with(compact('cateringes'));
    }
}
