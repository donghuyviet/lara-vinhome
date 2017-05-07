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
                <div class="box-header">
                    form
                </div>
                <div class="box-content">
                    <div class="text-center"><h2>add category</h2></div>
                    @include('errors.error')
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/category/store') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idtitle" placeholder="Tiêu đề bài biết" name="title_cate">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Category parent</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="stlParent">
                                    <option value="0"> Please Choose Category</option>
                                    <?php cate_parent($parent); ?>
                                </select>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Slug</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idtitle" placeholder="Slug: slug-bai-viet" name="slug">
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Position</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control"  placeholder="Position display category" name="position">
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
    </div>  

@endsection


