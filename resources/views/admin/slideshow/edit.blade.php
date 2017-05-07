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
                    <div class="text-center"><h2>Edit slide galary</h2></div>
                    @include('errors.error')
                    <form class="form-horizontal" method="POST" action="{{ url('/') }}/admin/slide/edit/{{$edit->id}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idtitle" placeholder="Tiêu đề bài biết" name="title" value="{{$edit->title}}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Desc-meta</label>
                            <div class="col-sm-8">
                                <input class="form-control " name="description" id="editor1" value="{{$edit->description}}" ></input>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Images</label>
                            <div class="col-sm-8"> 
                                <img src="/uploads/admin/slide/{{$edit->images}}" width="150px;">
                                <input class="form-control " name="images" type="file" value="{{$edit->images}}" ></input>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">URL</label>
                            <div class="col-sm-8">
                                <input class="form-control " name="url" value="{{$edit->url}}" ></input>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-8">
                                <label>
                                    <input type="radio" name="status" id="optionsRadios1" value="0" checked>
                                    Hiện
                                </label>
                                <label>
                                    <input type="radio" name="status" id="optionsRadios2" value="1">
                                    Ẩn
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


