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
                    <a class="btn btn-default" href="/admin/pages/add">Add New Pages</a>
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
                            <th>Description</th>
                            <th>satus</th>
                            <th>Create date</th>
                            <th>Update date</th>
                            <th></th>
                        </tr>
                        <?php $stt=0;?>
                        @foreach($pages as $pag)
                        <?php $stt++?>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{str_limit($pag->title, 100)}}</td>
                            <td>{{$pag->slug}}</td>
                            <td>{{str_limit($pag->description, 100)}}</td>
                            <td>@if($pag->status == 0) 
                                Hiện
                                @else
                                Ẩn
                                @endif
                            </td>
                            <td>{{$pag->created_at}}</td>
                            <td>{{$pag->updated_at}}</td>
                            <td>
                                <a class="btn btn-default" href="/admin/pages/edit/{{$pag->id}}" > <i class="glyphicon glyphicon-pencil"></i></a>
                                <a class="btn btn-danger" href="/admin/pages/delete/{{$pag->id}}" onclick="return confirm_delete('are you sure delete')"> <i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                           {!!$pages->links()!!}</a></li>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
@endsection


