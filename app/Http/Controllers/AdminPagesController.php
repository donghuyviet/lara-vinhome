<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminPages;
use App\AdminCategory;
use Illuminate\Support\Facades\DB;

class AdminPagesController extends Controller
{
     public function index(){
        $pages = AdminPages::paginate(1);
    	return view('/admin/pages/index',['pages'=>$pages]);
    }
    public function add(){
    	$cate = AdminCategory::all();
    	return view('/admin/pages/add', ['cate'=>$cate]);
    }

    public function store(Request $request){
    	$this->validate($request,
            [
                'title'=>'required|unique:pages',
                'slug'=>'required',
                'description'=>'required',
            ],
            [
                'title.required'=>'bạn chưa nhập title',
                'title.unique'=>'trùng title',
                'slug.required'=>'bạn chưa nhập slug',
                'slug.unique'=>'trùng slug',
            ]
            );
            $AdminPages = new AdminPages;
            // $orderer->user_id = Auth::user()->id;
            $AdminPages->id = $request->id;
            $AdminPages->title = $request->title;
            $AdminPages->slug = changTitle($request->slug);
            $AdminPages->description = $request->description;
            $AdminPages->status = $request->status;
            $AdminPages->save();
            return redirect('/admin/pages')-> with('success', 'add '.$AdminPages -> title.' success');
    }
    public function edit($id){
    	$edit = AdminPages::find($id);
    	$cate = AdminCategory::all();
    	return view('admin/pages/edit', ['edit'=>$edit, 'cate'=>$cate]);
    }
    public function update(Request $request,$id){
        $category = AdminPages::find($id);
    	$this->validate($request,
            [
                'title'=>'required|min:3|max:100',
                'slug'=>'required',
                'description'=>'required',
            ],
            [
                'title.required'=>'bạn chưa nhập title',
                'title.min'=>'tên thể loại phải có độ dài từ 3 ký tự trở lên',
                'title.max'=>'tên thể loại phải có độ dài quá 100 ký tự',
                'slug.required'=>'Bạn chưa nhập slug',
                'description.required'=>'Bạn chưa nhập description',
            ]
            );
            // $orderer->user_id = Auth::user()->id;
            $category->id = $request->id;
            $category->title = $request->title;
            $category->slug = changTitle($request->slug);
            $category->description = $request->description;
            $category->status = $request->status;

            $category->save();
            return redirect('/admin/pages/')-> with('success', 'Edit '.$category -> title.' success');
    }

    public function delete($id){
    	$delete = AdminPages::find($id);
    	$delete->delete();
    	return redirect('/admin/pages/')-> with('success', 'Delete '.$delete -> title.' success');
    }
}
