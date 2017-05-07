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
                    <div class="text-center"><h2> New Member</h2></div>
                    @include('errors.error')
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/members/store') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">User Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idtitle" placeholder="User name" name="name">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="" placeholder="password" name="password">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Hình Ảnh</label>
                            <div class="col-sm-6">
                                <input class="form-control " name="images" type="file" ></input>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">tel</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="tel" placeholder="0912889138" name="tel">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" placeholder="Ha Noi, Viet Nam" name="address">
                            </div>                            
                        </div>
                        <div class="form-group">
                                <label>
                                    <input type="radio" name="rul" id="optionsRadios2" value="1">
                                    Member
                                </label>
                            <label for="" class="col-sm-3 control-label">Rul</label>
                                <label>
                                    <input type="radio" name="rul" id="optionsRadios1" value="0" checked>
                                    Admin
                                </label>                         
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


