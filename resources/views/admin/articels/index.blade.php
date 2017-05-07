@extends('layouts.app')

@section('content')
<div class="col-md-3 left_col">
    @include('admin.sidebar.index')
           
</div>
     @include('admin.sidebar.menu')

    <div class="right_col" role="main">
<div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="box-header">
                    Manager Category
                    <a class="btn btn-default" href="/admin/articels/add">Add Articels</a>
                </div>
                <div class="box-content">
                    <h2>Manager Category</h2>
                    @include('errors.error')
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Images</th>
                            <th>Desc</th>
                            <th>Description</th>
                            <th>Cate</th>
                            <th>Satus</th>
                            <th>Create date</th>
                            <th>Update date</th>
                            <th></th>
                        </tr>
                        <?php $stt =0; ?>
                        @foreach($articel as $art)
                        <?php $stt++ ?>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{str_limit($art->title, 60)}}</td>
                            <td>{{$art->slug}}</td>
                            <td> <img src="/uploads/admin/articels/{{$art->images}}" width="80px" height="80px"></td>
                            <td>{{str_limit($art->desc, 80)}}</td>
                            <td>{{str_limit($art->description, 80)}}</td>
                            <td>{{$art->title_cate}}</td>
                            <td>@if($art->status == 0) 
                                Hiện
                                @else
                                Ẩn
                                @endif
                            </td>
                            <td>{{$art->created_at}}</td>
                            <td>{{$art->updated_at}}</td>
                            <td>
                                <a class="btn btn-default" href="/admin/articels/edit/{{$art->id}}" > <i class="glyphicon glyphicon-pencil"></i></a>
                                <a class="btn btn-danger" href="/admin/articels/delete/{{$art->id}}" onclick="return confirm_delete('are you sure delete')"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                           {!!$articel->links()!!}</a></li>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
@endsection


