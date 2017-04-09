<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminSlide;

class AdminSlideController extends Controller
{
    //
    public function index(){
    	$slide = AdminSlide::paginate(10);;
    	return view('admin.slideshow.index', ['slide'=>$slide]);
    }

    public function add(){
    	return view('admin.slideshow.add');
    }

     public function store(Request $request){
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
            $slide = new AdminSlide;
            $slide->id = $request->id;
            $slide->title = $request->title;
            $slide->description = $request->description;
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/slide/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/slide".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/slide',$images);
                $slide->images = $images;
            }else{
                $slide->images= "";
            }
            $slide->status = $request->status;
            $slide->save();
            return redirect('/admin/slide/')-> with('success', 'Add '.$slide -> title.' success');
    }

    public function edit($id){
        $edit = AdminSlide::find($id);
        return view('admin/slideshow/edit', ['edit'=>$edit]);
    }

    public function update(Request $request,$id){
        $category = AdminSlide::find($id);
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
            $category->id = $request->id;
            $category->title = $request->title;
            $category->description = $request->description;
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/slide/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/slide".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/slide',$images);
                $category->images = $images;
            }
            $category->status = $request->status;
            $category->save();
            return redirect('/admin/slide/')-> with('success', 'Edit '.$category -> title.' success');
    }
}
