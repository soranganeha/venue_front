<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class UsersPackageController extends Controller
{
    public function UsersviewPackages(Request $request){
 		$packages = Package::get();
 		return view('users.packages.viewpackage')->with(compact('packages'));
 	}
}
