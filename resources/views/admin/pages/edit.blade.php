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
                    <div class="text-center"><h2>add articles</h2></div>
                    @include('errors.error')
                    <form class="form-horizontal" method="POST" action="{{ url('/') }}/admin/pages/edit/{{$edit->id}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="idtitle" placeholder="Tiêu đề bài biết" name="title" value="{{$edit->title}}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="idtitle" placeholder="Slug: slug-bai-viet" name="slug" value="{{$edit->slug}}">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control " value="" name="description" >{{$edit->description}}</textarea>
                                <script type="text/javascript">
                                    config = {};
                                    config.entities_latin = false;
                                    var editor = CKEDITOR.replace('description',{
                                        language:'en',
                                        filebrowserImageBrowseUrl : '../../../src/admin/plugin/ckfinder/ckfinder.html?Type=Images',
                                        filebrowserFlashBrowseUrl : '../../../src/admin/plugin/ckfinder/ckfinder.html?Type=Flash',
                                        filebrowserImageUploadUrl : '../../../src/admin/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&Type=Images',
                                        filebrowserFlashUploadUrl : '../../../src/admin/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&Type=Flash',
                                    },config);
                                </script>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
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


