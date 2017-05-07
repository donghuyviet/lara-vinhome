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
                    <a class="btn btn-default" href="/admin/members/add">Add New members</a>
                </div>
                <div class="box-content">
                    <h2>Manager Category</h2>
                    @include('errors.error')
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>tel</th>
                            <th>address</th>
                            <th>Imgaes</th>
                            <th>tel</th>
                            <th>Create date</th>
                            <th>Update date</th>
                            <th></th>
                        </tr>
                        <?php $stt=0;?>
                        @foreach($members as $mem)
                        <?php $stt++;?>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{str_limit($mem->name, 100)}}</td>
                            <td>{{$mem->email}}</td>
                            <td>{{str_limit($mem->password, 30)}}</td>
                            <td>{{$mem->tel}}</td>
                            <td>{{$mem->address}}</td>
                            <td><img src="/uploads/admin/members/{{$mem->images}}" width="80px" height="80px"></td>
                            <td>@if($mem->rul == 0) 
                                admin
                                @else
                                members
                                @endif
                            </td>
                            <td>{{$mem->created_at}}</td>
                            <td>{{$mem->updated_at}}</td>
                            <td>
                                <a class="btn btn-default" href="/admin/members/edit/{{$mem->id}}" > <i class="glyphicon glyphicon-pencil"></i></a>
                                <a class="btn btn-danger" href="/admin/members/delete/{{$mem->id}}" onclick="return confirm_delete('are you sure delete')"> <i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                           {!!$members->links()!!}</a></li>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
@endsection


