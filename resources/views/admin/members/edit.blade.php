@extends('layouts.app')

@section('content')
<div class="col-md-3 left_col">
    @include('admin.sidebar.index')
           
</div>
     @include('admin.sidebar.menu')

    <div class="right_col" role="main">
       <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="box-content">
                    <div class="text-center"><h2> Edit Member</h2></div>
                    @include('errors.error')
                    <form class="form-horizontal" method="POST" action="{{ url('/') }}/admin/members/edit/{{$edit->id}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">User Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idtitle" placeholder="User name" name="name" value="{{ old('name', isset($edit) ? $edit['name']: null) }}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="" placeholder="password" name="password"value="{{ old('password', isset($edit) ? $edit['password']: null) }}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="Email" class="form-control" id="email" placeholder="example@gmail.com" name="email" value="{{ old('email', isset($edit) ? $edit['email']: null) }}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Hình Ảnh</label>
                            <div class="col-sm-6">
                                <img src="/uploads/admin/members/{{$edit->images}}" width="150px;">
                                <input class="form-control " name="images" type="file" value="{{ old('images', isset($edit) ? $edit['images']: null) }}"></input>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="address" placeholder="(+84)912889138" name="tel" value="{{ old('tel', isset($edit) ? $edit['tel']: null) }}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" placeholder="Ha Noi, Viet Nam" name="address" value="{{ old('address', isset($edit) ? $edit['address']: null) }}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Rul</label>
                            <div class="col-sm-8">
                                <label>
                                    <input type="radio" name="rul" id="optionsRadios1" value="0" checked>
                                    Admin
                                </label>
                                <label>
                                    <input type="radio" name="rul" id="optionsRadios2" value="1">
                                    Member
                                </label>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="submit" class="btn btn-default">cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

<!-- <link rel="stylesheet" type="text/css" href="/{{config('app.source')}}/css/search.css"> -->
<script src="/{{ config('app.source') }}/admin/ckeditor/ckeditor.js"></script>
    </div>  
@endsection


