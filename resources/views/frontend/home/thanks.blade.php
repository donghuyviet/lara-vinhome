@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="top-bread">
			<!-- <ol class="breadcrumb">
			  <li><a href="#">Trang chủ</a></li>
			  <li class="active">Cảm ơn</li>
			</ol> -->
		</div>
		<div class="col-xs-12 col-sm-9 contact">
			<div class="row contact-first">
				<div class="title text-center">Cảm ơn bạn đã đăng ký nhận thông tin</div>
				<div class="name text-center">VINHOMES RIVERSIDE THE HARMONY</div>
				<div class="line-bottom cam-on"></div>

				<div class="thanks text-center">
					Xin chân thành cám ơn Quý khách đã quan tâm đến dự án, chúng tôi sẽ hồi âm trong thời gian sớm nhất. Chúc Quý Khách một ngày vui vẻ !
				</div>
			</div>
			<div class="">
				<img src="/src/frontend/assets/images/cam-on.jpg">
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
