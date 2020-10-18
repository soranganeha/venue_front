<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{

    public function UserRegiserLogin(){
        return view('users.loginregister');
    }


    public function userLoginRegister(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            //check if user is already exists
            $usersCount = User::where('email',$data['email'])->count();
            if($usersCount>0){
                return redirect()->back()->with('flash_message_error','Email already exists');
            }else{
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->mobile_no = $data['mobile_no'];
                $user->address = $data['address'];
                $user->save();
                return redirect('/addbooking');
            }
        }
    }

    public function Loginuser(Request $request){
    	if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('/viewvenues');
            }else{
                // echo "failed"; die;
                return redirect('/viewvenues')->with('flash_message_error','Invalid Username or Password');
            }
        }
    }
}
