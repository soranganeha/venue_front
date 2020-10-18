<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Decorations;

class UsersDecorationController extends Controller
{
    public function UsersviewDecorations(){
    	$decorations = Decorations::get();
    	return view('users.decorations.viewdecorations')->with(compact('decorations'));
    }
}
