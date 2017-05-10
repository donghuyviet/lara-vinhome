<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUtility;
use Illuminate\Support\Facades\DB;

class AdminUtilityController extends Controller
{
    //
    public function index(){
     	$utilitys = DB::table('utility')->paginate(10);
    	return view('/admin/utilitys/index',['utilitys'=>$utilitys]);
    }
    public function add(){
    	return view('/admin/utilitys/add');
    }

    public function store(Request $request){
    	$this->validate($request,
            [
                'name'=>'required',
            ],
            [
                'name.required'=>'bạn chưa nhập tên tiện ích',
            ]
            );
            $utility = new AdminUtility;
            // $orderer->user_id = Auth::user()->id;
            $utility->id = $request->id;
            $utility->name = $request->name;
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/utilitys/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/utilitys".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/utilitys',$images);
                $utility->images = $images;
            }else{
                $utility->images= "";
            }

            $utility->save();
            return redirect('/admin/utilitys')-> with('success', 'add '.$utility -> name.' success');
    }
    public function edit($id){
    	$edit = AdminUtility::find($id);
    	return view('admin/utilitys/edit', ['edit'=>$edit]);
    }
    public function update(Request $request,$id){
        $category = AdminUtility::find($id);
    	$this->validate($request,
            [
                'name'=>'required|min:3|max:100'
            ],
            [
                'name.required'=>'bạn chưa nhập tên tiện ích',
                'name.min'=>'tên thể loại phải có độ dài từ 3 ký tự trở lên',
                'name.max'=>'tên thể loại phải có độ dài quá 100 ký tự',
            ]
            );
            // $orderer->user_id = Auth::user()->id;
            $category->id = $request->id;
            $category->name = $request->name;
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/utilitys/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/utilitys".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/utilitys',$images);
                $category->images = $images;
            }

            $category->save();
            return redirect('/admin/utilitys/')-> with('success', 'Edit '.$category -> name.' success');
    }

    public function delete($id){
    	$delete = AdminUtility::find($id);
    	$delete->delete();
    	return redirect('/admin/utilitys/')-> with('success', 'Delete '.$delete -> name.' success');
    }
}
