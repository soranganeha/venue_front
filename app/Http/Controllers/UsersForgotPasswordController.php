<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\User;
use Sentinal;
use Reminder;
use Mail;

class UsersForgotPasswordController extends Controller
{
    public function forgot() {
       return view('users.forgot');	
    }

    public function password(Request $request){
    	$user = User::whereEmail($request->email)->first();
    	if ($user == null) {
    		return redirect()->back()->with(['error'=>'Email does not exist']);
    	}

    	$user = Sentinal::findById($user->id);
    	$reminder = Reminder::exists($user)	? : Reminder::create($user);
    	$this->sendEmail($user, $reminder->code);

    	return redirect()->back()->with(['success'=>'Reset Password link send to your email']);
    }

    public function sendEmail($user, $code){
    	Mail::send(
    		'email.forgot',
    		['user'=> $user, 'code'=>$code],
    		function($message) use ($user){
    			$message->to($user->email);
    			$message->subject('$user->name, Reset Your Password');
    		}
    	);
    }
}
