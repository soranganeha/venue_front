<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function addpayment(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;
    		$payment = new Payment;
    		$payment->user_id = $data['user_id'];
    		$payment->total_amount = $data['total_amount'];
    		$payment->amount_paid = $data['amount_paid'];
    		$payment->status = $data['status'];
    		$payment->date = $data['date'];
    		$payment->save();
    		return redirect('/viewpayments')->with('flash_message_error','Payment added sucessfully');
    	}
    	return view('users.payments.addpayment');
    }

    public function editPayment(Request $request, $id = null){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>"; print_r($data);die;
    		Payment::where(['id'=>$id])->update(['user_id'=>$data['user_id'],'total_amount'=>$data['total_amount'],'amount_paid'=>$data['amount_paid'],'status'=>$data['status'],'date'=>$data['date']]);
    		return redirect('/viewpayments')->with('flash_message_error','Payment edited sucessfully');
    	}
    	$paymentDetails = Payment::where(['id'=>$id])->first();
    	return view('admin.payments.editpayment')->with(compact('paymentDetails'));
    }

    public function deletePayment(Request $request, $id = null){
    	if(!empty($id)){
    		Payment::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_error','Payment deleted sucessfully');
    	}
    }   
     public function viewPayment(){    	
    	$payments = Payment::get();
    	$payments = json_decode(json_encode($payments));
    	//echo "<pre>"; print_r($payments); die;
    	return view('admin.payments.viewpayment')->with(compact('payments'));
    }
}
