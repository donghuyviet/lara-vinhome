<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;
class AdminCustomerController extends Controller
{
    //
     public function index(){
        $customers = Customer::orderBy('id','DESC')->paginate(20);
    	return view('/admin/customers/index',['customers'=>$customers]);
    }
}
