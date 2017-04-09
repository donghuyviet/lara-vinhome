<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminArticel;
use App\AdminCategory;
use Illuminate\Support\Facades\DB;

class AdminArticelController extends Controller
{
    //
    public function index(){
     	$articel = DB::table('articel')
            ->join('category', 'articel.cate_id', '=', 'category.id')
            ->select('articel.*', 'category.title_cate')
            ->paginate(10);
        $paginate = AdminArticel::paginate(2);
    	return view('/admin/articels/index',['articel'=>$articel]);
    }
    public function add(){
    	$cate = AdminCategory::all();
    	return view('/admin/articels/add', ['cate'=>$cate]);
    }

    public function store(Request $request){
    	$this->validate($request,
            [
                'title'=>'required|unique:articel',
                'slug'=>'required',
                'description'=>'required',
                'desc'=>'required'
            ],
            [
                'title.required'=>'bạn chưa nhập title',
                'title.unique'=>'trùng title',
                'slug.required'=>'bạn chưa nhập slug',
                'slug.unique'=>'trùng slug',
            ]
            );
            $AdminArticel = new AdminArticel;
            // $orderer->user_id = Auth::user()->id;
            $AdminArticel->id = $request->id;
            $AdminArticel->title = $request->title;
            $AdminArticel->slug = changTitle($request->slug);
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/articels/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/articels".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/articels',$images);
                $AdminArticel->images = $images;
            }else{
                $AdminArticel->images= "";
            }
            $AdminArticel->description = $request->description;
            $AdminArticel->desc = $request->desc;
            $AdminArticel->status = $request->status;
            $AdminArticel->cate_id = $request->AdminCategory;

            $AdminArticel->save();
            return redirect('/admin/articels')-> with('success', 'add '.$AdminArticel -> title.' success');
    }
    public function edit($id){
    	$edit = AdminArticel::find($id);
    	$cate = AdminCategory::all();
    	return view('admin/articels/edit', ['edit'=>$edit, 'cate'=>$cate]);
    }
    public function update(Request $request,$id){
        $category = AdminArticel::find($id);
    	$this->validate($request,
            [
                'title'=>'required|min:3|max:100'
            ],
            [
                'title.required'=>'bạn chưa nhập title',
                'title.min'=>'tên thể loại phải có độ dài từ 3 ký tự trở lên',
                'title.max'=>'tên thể loại phải có độ dài quá 100 ký tự',
            ]
            );
            // $orderer->user_id = Auth::user()->id;
            $category->id = $request->id;
            $category->title = $request->title;
            $category->slug = changTitle($request->slug);
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/articels/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/articels".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/articels',$images);
                $category->images = $images;
            }
            $category->cate_id = $request->AdminCategory;

            $category->save();
            return redirect('/admin/articels/')-> with('success', 'Edit '.$category -> title.' success');
    }

    public function delete($id){
    	$delete = AdminArticel::find($id);
    	$delete->delete();
    	return redirect('/admin/articels/')-> with('success', 'Delete '.$delete -> title.' success');
    }
}
