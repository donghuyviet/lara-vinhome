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
                    <a class="btn btn-default" href="/admin/utilitys/add">Add utilitys</a>
                </div>
                <div class="box-content">
                    <h2>Manager Utility</h2>
                    @include('errors.error')
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Create date</th>
                            <th>Update date</th>
                            <th></th>
                        </tr>
                        <?php $stt =0; ?>
                        @foreach($utilitys as $uti)
                        <?php $stt++ ?>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{str_limit($uti->name, 60)}}</td>
                            <td> <img src="/uploads/admin/utilitys/{{$uti->images}}" width="80px" height="80px"></td>
                            <td>{{$uti->created_at}}</td>
                            <td>{{$uti->updated_at}}</td>
                            <td>
                                <a class="btn btn-default" href="/admin/utilitys/edit/{{$uti->id}}" > <i class="glyphicon glyphicon-pencil"></i></a>
                                <a class="btn btn-danger" href="/admin/utilitys/delete/{{$uti->id}}" onclick="return confirm_delete('are you sure delete')"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                           {!!$utilitys->links()!!}</a></li>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
@endsection


