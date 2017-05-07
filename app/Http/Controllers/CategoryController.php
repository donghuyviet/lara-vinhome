<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\AdminPages;
use App\AdminCategory;
use App\AdminArticel;
use App\Customer;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
                        ->paginate(20);
        view()->share('news',$news);

        // News related
        $relate = DB::table('articel')->where([['status', '=', '0'],['cate_id', '=', '22']])->paginate(20);
        view()->share('relate',$relate);
	}

    public function index() {
    	return view ('frontend.category.index');
    }
}
