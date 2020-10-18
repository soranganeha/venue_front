<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function addfeedback(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;
    		$feedback = new Feedback;
    		$feedback->user_id = $data['user_id'];
    		$feedback->venue_id = $data['venue_id'];
    		$feedback->feedback_details = $data['feedback_details'];
    		$feedback->date = $data['date'];
    		$feedback->save();
    		return redirect('/viewfeedbacks')->with('flash_message','Feedback added successfuly');
    	}
    	return view('users.feedbacks.addfeedback');
    }

    public function editFeedback(Request $request, $id = null){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		Feedback::where(['id'=>$id])->update(['user_id'=>$data['user_id'],'venue_id'=>$data['venue_id'],'feedback_details'=>$data['feedback_details'],'date'=>$data['date']]);
    		return redirect('/viewfeedbacks')->with('flash_message_error','Feedback edited sucessfully');
    	}
    	$feedbackDetails = Feedback::where(['id'=>$id])->first();
    	return view('admin.feedbacks.editfeedback')->with(compact('feedbackDetails'));
    }

    public function deleteFeedback(Request $request,$id = null){
    	if(!empty($id)){
    		Feedback::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message','Feedback delete successfuly');
    	}
    }

    public function viewFeedback(Request $request){
    	$feedbacks = Feedback::get();
    	$feedbacks = json_decode(json_encode($feedbacks));
    	return view('admin.feedbacks.viewfeedback')->with(compact('feedbacks'));
    }

}
