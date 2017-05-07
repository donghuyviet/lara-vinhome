<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\Slide;
use App\AdminPages;
use App\AdminCategory;
use App\AdminArticel;
use App\Customer;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	function __construct()
	{
		$slide = Slide::all();
		view()->share('slide',$slide);

		// $menu = DB::table('category')->orderBy('position','ASC')->where('status',0)->get();
        // view()->share('menu',$menu);

        $sidebar = DB::table('category')->orderBy('position','ASC')->where('status',0)->get();
        view()->share('sidebar',$sidebar);

        $pages = AdminPages::all();
        view()->share('pages',$pages);

        // $news = AdminArticel::all();
        $news =  DB::table('articel')->orderBy('title','ASC')->select('articel.*')->limit(5)->get();
        view()->share('news',$news);

        // News related
        $relate = DB::table('articel')->where([['status', '=', '0'],['cate_id', '=', '22']])->limit(4)->get();
        view()->share('relate',$relate);
	}

    public function home(){
    	return view('frontend.home.index');
    }

    public function menu(){
        return view ('frontend.home.menu');
    }

    public function sidebar(){
    	return view('frontend.home.sidebar');
    }
    public function news(){
    	return view('frontend.home.news');
    }
    public function thanks(){
    	return view('frontend.home.thanks');
    }

    // products related
    public function relate(){
        return view('frontend.news.relate');
    }

    // Contact page
    public function contact(){
        return view('frontend.contact.index');
    }

    // form submmit regiter
    public function get_mail(Request $request){
    	$this->validate($request,
        [
            'name'=>'required',
            'phone'=>'required'
        ],
        [
            'name.required'=>'Bạn chưa nhập tên',
            'phone.unique'=>'Bạn chưa nhập số điện thoại ',
        ]);
    	$customer = New Customer;
    	$customer->name = $request->name;
    	$customer->phone = $request->phone;
    	$customer->email = $request->email;
        $customer->save();
    	$input = $request->all();
        Mail::send('frontend.email.contact', array('name'=>$input["name"],'phone'=>$input["phone"], 'email'=>$input['email']), function($message){
            $message->from('dongviet.bds@gmail.com', 'DONG HUY VIET');
            $message->to('dongviet.bds@gmail.com', 'Visitor')->cc('donghuyviet@gmail.com')->subject('Summit info Vinhomes Riverside');
        });
        Session::flash('flash_message', 'Send message successfully!');    	
    	return redirect('/cam-on.html')-> with('You are send info success ! thank you so much.');

    }

    public function category () {
        // return view('frontend.home.thanks');
    }

    public function download($file_name) {        
        $file_path = public_path('upload/files/'.$file_name);
        return response()->download($file_path);
      }

}
