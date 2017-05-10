@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
	<div class="top-bread">
		<!-- <ol class="breadcrumb">
		  <li><a href="#">Trang chủ</a></li>
		  <li class="active">Category</li>
		</ol> -->
	</div>
		<div class="col-xs-12 col-sm-9 tieukhu">
			<div class="title"> Shop House</div>
			@foreach($relate as $item)
			<div class="col-xs-12 col-sm-6 item">
				<a href="{{URL('tin-tuc',[$item->id, $item->slug])}}.html">
					<img src="/uploads/admin/articels/{{$item->images}}">
					<div class="name"> {{$item->title}}</div>
					<div class="desc"> {!! $item->desc!!}</div>
				</a>
			</div>
			@endforeach
			
			<!-- pagination -->
			<div class="" style="text-align: center;">
				{{$relate->links()}}
			</div>
		</div>
		<!-- news -->
		<div class="col-xs-12 col-sm-3 list-news ">
			@include('frontend.home.sidebar')
			@include('frontend.home.form')
			@include('frontend.home.news')
		</div>
	</div>
</div>
@endsection
