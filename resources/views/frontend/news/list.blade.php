@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="top-bread">
		</div>
		<div class="col-xs-12 col-sm-9 news">
			<div class="title text-center"> Tin Tức - Sự kiện</div>
			<div class="line-bottom"></div>
			<div class="main-news">
				@foreach($articels as $item)
				<div class="col-xs-12 col-sm-6 item">
				<div class="news-left">
					<a href="{{URL('tin-tuc',[$item->id, $item->slug])}}.html"><img class="img-rounded" src="/uploads/admin/articels/{{$item->images}}"></a>
				</div>
				<div class="news-right">
					<a href="{{URL('tin-tuc',[$item->id, $item->slug])}}.html">
						<div class="name">
							{{$item->title}}
						</div>
						<div class="time">{{$item->created_at}}</div>
					</a>
				</div>
				</div>
				@endforeach
			</div>
			

			<!-- pagination -->
			<div style="text-align: center;">
				{{$articels->links()}}
			</div>
		</div>
		<!-- news -->
		<div class="col-xs-12 col-sm-3 list-news ">
			@include('frontend.home.sidebar')
			@include('frontend.home.form')
			@include('frontend.home.news')
		</div>
		
	</div>
	<div class="container">
		<div class="row">
			@include('frontend.news.relate')
		</div>
	</div>
</div>

@endsection
