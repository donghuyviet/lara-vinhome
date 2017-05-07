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
                    Manager Customers
                </div>
                <div class="box-content">
                    <h2>Manager Customers</h2>
                    @include('errors.error')
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Create date</th>
                            <th>Update date</th>
                        </tr>
                        <?php $stt=0;?>
                        @foreach($customers as $cust)
                        <?php $stt++;?>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{str_limit($cust->name, 100)}}</td>
                            <td>{{$cust->email}}</td>
                            <td>{{$cust->phone}}</td>
                            <td>{{$cust->created_at}}</td>
                            <td>{{$cust->updated_at}}</td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    <div class="text-right">
                        <nav aria-label="Page navigation">
                           {!!$customers->links()!!}</a></li>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
@endsection


