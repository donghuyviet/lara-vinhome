<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\AdminPages;
use App\AdminCategory;
use App\AdminArticel;
use App\Customer;
use App\News;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    function __construct()
	{

        $sidebar = DB::table('category')->orderBy('position','ASC')->where('status',0)->get();
        view()->share('sidebar',$sidebar);

        $pages = AdminPages::all();
        view()->share('pages',$pages);

        // $news = AdminArticel::all();
        $news =  DB::table('articel')
                        ->orderBy('title','ASC')
                        ->select('articel.*')
                        ->limit(10)->get();
        view()->share('news',$news);

        // News related
        $relate = DB::table('articel')->where([['status', '=', '0'],['cate_id', '=', '22']])->limit(4)->get();
        view()->share('relate',$relate);

	}
    public function index(){
    	$articels = AdminArticel::where('status',0)->orderBy('id','DESC')->paginate(20);
    	return view('frontend.news.list',['articels'=>$articels]);
    }

    public function detail($id) {
    	$detail_news = AdminArticel::find($id);
    	return view('frontend.news.detail',['detail_news'=>$detail_news]);
    }
}
