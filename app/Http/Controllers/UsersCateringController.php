<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cateringes;

class UsersCateringController extends Controller
{
    public function UsersviewCateringes(){
    	$cateringes = Cateringes::get();
    	return view('users.cateringes.viewcateringes')->with(compact('cateringes'));
    }
}
