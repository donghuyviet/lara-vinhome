@extends('layouts.frontend')

@section('content')
<div class="container">
	<div class="row">
		<div class="top-bread">
			<ol class="breadcrumb">
			  <li><a href="#">Trang chủ</a></li>
			  <li class="active">Cảm ơn</li>
			</ol>
		</div>

		<div class="container contact">
			<div class="row contact-first">
				<div class="title text-center">Liên hệ phòng kinh doanh</div>
				<div class="name text-center">VINHOMES RIVERSIDE THE HARMONY</div>
				<div class="line-bottom contact-01"></div>

				<div class="thanks">
					Xin chân thành cám ơn Quý khách đã quan tâm đến dự án. Để biết thêm thông tin chi tiết, Quý khách vui lòng liên hệ trực tiếp thông qua SĐT (+84912889138) - Đại lý phân phối chính thức của VINHOMES RIVERSIDE THE HARMONY , hoặc để lại thông tin theo form bên dưới. Chúng tôi sẽ hồi âm trong thời gian sớm nhất.
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 form-submit ">
					<div class="title text-center"> Đăng ký nhận thông tin dự án</div>
					<div class="line-bottom"></div>
					<div class="thanks text-center">
						Tải ngay bộ tài liệu Vinhomes The Harmony chính thức từ chủ đầu tư Vinhomes bao gồm mặt bằng tổng thể, mặt bằng căn hộ, hình ảnh căn hộ mẫu, bảng giá, hợp đồng mẫu.
					</div>
					<div class="contact-form">
						<form method="POST" action="{{url('/store') }}">
							<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<div class="form-group col-xs-12 col-sm-6 text-center">
							    <label for="exampleInputName">Họ Tên (*)</label>
							    <input type="text" class="form-control" id="Name" placeholder="Họ Tên" name="name">
							</div>
							<div class="form-group col-xs-12 col-sm-6 text-center">
							    <label for="exampleInputPassword1">Điện Thoại (*)</label>
							    <input type="tel" class="form-control" id="tel_id" placeholder="Number phone" name="phone">
							</div>
							<div class="form-group col-xs-12 text-center">
							    <label for="exampleInputEmail1">Email</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
							</div>
							<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
							<button type="submit" class="btn btn-default btn-submit form-group ">Gửi thông tin</button>
							</div>
						
						</form>
					</div>
				</div>
				<!-- table-price sales -->
				<div class="col-xs-12 col-sm-6 table-price">
					<div class="title text-center"> BẢNG GIÁ & CHÍNH SÁCH BÁN HÀNG</div>
					<div class="line-bottom"></div>
					<div class="thanks text-center">
						Vinhomes The Harmony Chuẩn bị có đầy đủ thông tin về mặt bằng – chính sách – giá bán. Quý khách vui lòng liên hệ bộ phận Kinh doanh Vinhomes The Harmony để được cung cấp thông tin nhanh nhất
					</div>
					<div class="thanks support text-center">Hỗ trợ tư vấn chuyên sâu- cập nhật những thông tin mới nhất:</div>
					<div class="hotline text-center">HOTLINE HỖ TRỢ :<a href="tel:0912889138"> 0912.889.138</a></div>
				</div>
				
			</div>
				<p class="copy-right"> donghuyviet <span>	&copy;</span> All rights reserved.</p>
			</div>		
	</div>
</div>

@endsection
