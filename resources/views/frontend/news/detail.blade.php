@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="top-bread">
			<ol class="breadcrumb">
			  <li><a href="#">Trang chủ</a></li>
			  <li class=""><a href="#">Tin tức</a></li>
			  <li class="active">detail</li>
			</ol>
		</div>
		<div class="col-xs-12 col-sm-9 news">
			<div class="title text-center"> Tin Tức - Sự kiện</div>
			<div class="line-bottom"></div>
			<div class=" news-detail">
				<div class="title">{{$detail_news->title}}</div>
				<div class="time">{{$detail_news->created_at}}</div>
				<div class="desc">
					<p>
						{!!$detail_news->description!!}
					</p>
				</div>
			</div>	
		
		</div>
		<!-- news -->
		<div class="col-xs-12 col-sm-3 list-news ">
			@include('frontend.home.news')
			@include('frontend.home.form')
			@include('frontend.home.sidebar')
		</div>
		
	</div>
	<div class="container">
		<div class="row">
			@include('frontend.news.relate')
		</div>
	</div>
</div>

@endsection
