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
                    Manager Category
                    <a class="btn btn-default" href="/admin/category/add">Add New Category</a>
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
                            <th>Slug</th>
                            <th>status</th>
                            <th>Create date</th>
                            <th>Update date</th>
                            <th></th>
                        </tr>
                        @foreach($category as $cate)
                        <tr>
                            <td>{{$cate->id}}</td>
                            <td>{{$cate->title_cate}}</td>
                            <td>{{$cate->slug}}</td>
                            <td>@if($cate->status == 0) 
                                Hiện
                                @else
                                Ẩn
                                @endif
                            </td>
                            <td>{{$cate->created_at}}</td>
                            <td>{{$cate->updated_at}}</td>
                            <td>
                                <a class="btn btn-default" href="/admin/category/edit/{{$cate->id}}" >Edit</a>
                                <a class="btn btn-danger" href="/admin/category/delete/{{$cate->id}}" onclick="confirm()">Del</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                            {{$category->links()}}
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    </div> 
    <script>
        function confirm(){

            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure',
                buttons: {
                    confirm: function () {
                        $.alert('Confirmed!');
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }

                }
            });
        }
    </script>
@endsection


