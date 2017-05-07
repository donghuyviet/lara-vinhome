<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide

class SlideController extends Controller
{
    //
    function __contruct(){
		$slide = Slide::all();
		view()->share('slide',$slide);
	}
}
