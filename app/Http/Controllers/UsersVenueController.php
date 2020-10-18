<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venues;

class UsersVenueController extends Controller
{
    public function UsersviewVenues(){
    	$venues = Venues::get();
    	$venues = json_decode(json_encode($venues));
    	return view('users.venues.viewvenue')->with(compact('venues'));
    }
}
