<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Decorations;

class DecorationsController extends Controller
{
    public function addDecoration(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		$decoration = new Decorations;
    		$decoration->decoration_type = $data['decoration_type'];
    		$decoration->price = $data['price'];
    		$decoration->save();
    		return redirect('/viewdecorations')->with('flash_message_success','Decoration Added Successfully!!!!');
    	}
    	return view('admin.decorations.adddecoration');
    }

    public function editDecoration(Request $request, $id = null){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		Decorations::where(['id'=>$id])->update(['decoration_type'=>$data['decoration_type'],'price'=>$data['price']]);
    		return redirect('/viewdecorations')->with('flash_message_success','Decoration Updated Successfully!!!!');
    	}
    	$decorationDetails = Decorations::where(['id'=>$id])->first();
    	return view('admin.decorations.editdecoration')->with(compact('decorationDetails'));
    }

    public function deleteDecoration($id = null){
    	//echo $id;die;
    	if (!empty($id)) {
    		Decorations::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_success','Decoration Deleted Successfully!!!!');
    	}
    }

    public function viewDecorations(){
    	$decorations = Decorations::get();
    	return view('admin.decorations.viewdecoration')->with(compact('decorations'));
    }
}
