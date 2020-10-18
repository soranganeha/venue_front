<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;//this to add modal user
use Illuminate\Support\Facades\Hash; //this to check hash password

class AdminController extends Controller
{
    public function login(Request $request){
    	if ($request->isMethod('post')){
    		$data = $request->input();
    		if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'is_admin'=>'1'])){
    			//echo "SUCCESSFULLY LOGIN";die;
    			//Session::put('adminSession',$data['email']);
    			return redirect('/admin/dashboard');
    		}else{
    			//echo "FAILED TO LOGIN";die;
    			return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
    		}
    	}
        return view('admin.adminlogin');
    }

    public function dashboard(){
    	 // if (Session::has('adminSession')) {
      //       //perform all dashboard task
      //   }else{
      //       return redirect('/admin')->with('flash_message_error','Please login to access');
      //   }
    	//echo "test";die;
    	return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function checkpassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['is_admin'=>'1'])->first();
        if (Hash::check($current_password,$check_password->password)) {
            echo "true";die;
        }else{
            echo "false";die;
        }
    }

    public function updatePassword(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>";print_r($data);die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if (Hash::check($current_password,$check_password->password)) {
                $password = bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password Updated Successfully');
            }else{
                return redirect('/admin/settings')->with('flash_message_error','Incorrect Current Password');
            }
        }
    }
    
    public function logout(){
    	Session::flush();
        //echo "test";die;
        return redirect('/admin')->with('flash_message_success','Logged out Successfully');
    }
}
