@extends('layouts.app')

@section('content')
<div class="col-md-3 left_col">
    @include('admin.sidebar.index')
           
</div>
     @include('admin.sidebar.menu')

    <div class="right_col" role="main">
        login successfully
    </div>  
@endsection


