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
                    <a class="btn btn-default" href="/admin/slide/add">Add Slide Galary</a>
                </div>
                <div class="box-content">
                    <h2>Manager Category</h2>
                    @if(count($errors)>0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            @foreach($errors->all() as $err)
                                {{$err}} </br>
                            @endforeach
                        </div>
                    @endif
                    @if(Session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>images</th>
                            <th>Link</th>
                            <th>status</th>
                            <th>Create date</th>
                            <th>Update date</th>
                            <th></th>
                        </tr>
                        <?php $stt=0;?>
                        @foreach($slide as $sli)
                        <?php $stt++?>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{str_limit($sli->title, 100)}}</td>
                            <td>{{$sli->description}}</td>
                            <td><img src="/uploads/admin/slide/{{$sli->images}}" width="80px;" height="80px;"></td>
                            <td>{{$sli->url}}</td>
                            <td>@if($sli->title_cate == 0) 
                                Hiện
                                @else
                                Ẩn
                                @endif
                            </td>
                            <td>{{$sli->created_at}}</td>
                            <td>{{$sli->updated_at}}</td>
                            <td>
                                <a class="btn btn-default" href="/admin/slide/edit/{{$sli->id}}" > <i class="glyphicon glyphicon-pencil"></i></a>
                                <a class="btn btn-danger" href="/admin/slide/delete/{{$sli->id}}" onclick="return confirm_delete('are you sure delete')"> <i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                            {{$slide->links()}}
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
@endsection


