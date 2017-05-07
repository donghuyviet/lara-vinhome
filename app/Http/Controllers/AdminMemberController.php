<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMember;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminMemberController extends Controller
{
    //
     public function index(){
        $members = AdminMember::paginate(10);
    	return view('/admin/members/index',['members'=>$members]);
    }
    public function add(){
    	$cate = AdminMember::all();
    	return view('/admin/members/add', ['cate'=>$cate]);
    }

    public function store(Request $request){
    	$this->validate($request,
            [
                'name'=>'required|unique:users',
                'email'=>'required|unique:users',
                'password'=>'required',
                'rul'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập username',
                'name.unique'=>'trùng usernamess',
                'email.required'=>'bạn chưa nhập email',
                'email.unique'=>'trùng Emailss',
                'email.required'=>'Bạn chưa nhập rul',
            ]
            );
            $Adminmembers = new AdminMember;
            $Adminmembers->id = $request->id;
            $Adminmembers->name = $request->name;
            $Adminmembers->email = $request->email;
            $Adminmembers->password = Hash::make($request->password);
            $Adminmembers->tel = $request->tel;
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/members/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/members".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/members',$images);
                $Adminmembers->images = $images;
            }else{
                $Adminmembers->images= "";
            }
            $Adminmembers->address = $request->address;
            $Adminmembers->rul = $request->rul;
            $Adminmembers->save();
            return redirect('/admin/members')-> with('success', 'add '.$Adminmembers -> name.' success');
    }
    public function edit($id){
    	$edit = AdminMember::find($id);
    	return view('admin/members/edit', ['edit'=>$edit]);
    }
    public function update(Request $request,$id){
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'rul'=>'required'
            ],
            [
                'name.required'=>'bạn chưa nhập username',
                'email.required'=>'bạn chưa nhập email',
                'email.required'=>'Bạn chưa nhập rul',
            ]
            );
            $Adminmembers =AdminMember::find($id);
            $Adminmembers->id = $request->id;
            $Adminmembers->name = $request->name;
            $Adminmembers->email = $request->email;
            $Adminmembers->password = Hash::make($request->password);
            $Adminmembers->tel = $request->tel;
            if($request->hasFile('images')){
                $file = $request->file('images');
                $duoi = $file->getClientOriginalExtension();
                if($duoi !='jpg' && $duoi !='png' && $duoi !='jepg'){
                    return redirect('admin/members/')-> with('success', 'Warning! Bạn chỉ được chọn đuổi png, jpg, jepg');
                }
                $name = $file->getClientOriginalName();
                $images = str_random(4)."_".$name;

                while(file_exists("uploads/admin/members".$images)){
                    $images = str_random(4)."_".$name;
                }
                $file->move('uploads/admin/members',$images);
                $Adminmembers->images = $images;
            }
            $Adminmembers->address = $request->address;
            $Adminmembers->rul = $request->rul;
            $Adminmembers->save();
            return redirect('/admin/members')-> with('success', 'add '.$Adminmembers -> name.' success');
    }

    public function delete($id){
    	$delete = AdminMember::find($id);
    	$delete->delete();
    	return redirect('/admin/members/')-> with('success', 'Delete '.$delete -> name.' success');
    }
}
