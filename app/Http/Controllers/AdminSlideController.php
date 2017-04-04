<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSlide;

class AdminSlideController extends Controller
{
    //
    public function index(){
    	$slide = AdminSlide::all();
    	return view('admin.slideshow.index', ['slide'=>$slide]);
    }
}
