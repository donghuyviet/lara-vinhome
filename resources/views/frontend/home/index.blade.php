@extends('layouts.frontend')

@section('content')
		<!-- slide show -->
        @include('frontend.home.slide')
		<!-- Quy mô -->
		
		<!-- Vị trí -->
		<div class="section animatedParent animateOnce pages ">
			<div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-9 news">
					@foreach ($pages as $pag)
						<div class=" title home text-center">{{$pag->title}}</div>
						<div class="desc"><p> {{$pag->desc}}</p></div>
						<div class="content text-center">
						<p>{!!$pag->description!!}</p>
						</div>
					@endforeach
					</div>
					<div class="col-xs-12 col-sm-3 list-news ">
						@include('frontend.home.sidebar')
						@include('frontend.home.form')
						@include('frontend.home.news')
					</div>
				</div>
			</div>
		</div>
		<!-- video, 360 -->
		<div class="section animatedParent animateOnce ">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center animatedParent" data-sequence='500'>
							<div class="section-content text-center ">
								<div class="name text-center">KHÁM PHÁ CENTROSA GARDEN
									<div class="clearfix"></div>
									<div class="line-bottom"></div>
								</div>
							</div>
							<div class="item-bottom-bg">
								<a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s">
									<img src="/src/frontend/assets/images/img-video.jpg">
								</a>
							</div>
							<!-- modal video -->
							<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-body">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <div>
						                    <iframe width="100%" height="350" src=""></iframe>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						</div>
					<div class="col-md-6 text-center animatedParent" data-sequence='500'>
							<div class="section-content text-center ">
								<div class="name text-center">Trải nghiệm dự án 360°
									<div class="clearfix"></div>
									<div class="line-bottom"></div>
								</div>
							</div>
							<div class="item-bottom-bg">
								<a href="sample-tour/index.html" >
									<img src="/src/frontend/assets/images/img-video.jpg">
								</a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<!-- Tin tức, sự kiện -->
		<!-- <div class="section animatedParent animateOnce ">
			<div class="container-main">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center animatedParent" data-sequence='500'>
							<div class="section-content text-center ">
								<div class="text text-center">07</div>
								<div class="name text-center"> Nhận thông tin dự án
									<div class="clearfix"></div>
									<div class="line-bottom"></div>
								</div>
								<div class="item-icon"><img alt="Nhà mẫu" src="/src/frontend/assets/images/ico-c-contact.svg"></div>
							</div>
							<div class="box-contact contact-form ">
								<p class="box-desc">
									Vui lòng điền đẩy đủ thông tin bên dưới để nhận được thông tin chính thức về dự án Vinhome Riverside, các chương trình khuyến mãi.
								</p>
								<div class="">
									<form>
										<div class="form-group col-xs-12 col-sm-6 text-center">
										    <label for="exampleInputName">Họ Tên (*)</label>
										    <input type="text" class="form-control" id="Name" placeholder="Họ Tên">
									</div>
									<div class="form-group col-xs-12 col-sm-6 text-center">
									    <label for="exampleInputPassword1">Điện Thoại (*)</label>
									    <input type="tel" class="form-control" id="tel_id" placeholder="Number phone">
									</div>
									<div class="form-group col-xs-12 text-center">
									    <label for="exampleInputEmail1">Email</label>
									    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									</div>
									<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
									<button type="submit" class="btn btn-default btn-submit form-group ">Gửi thông tin</button>
									</div>
									
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-6 text-center animatedParent" data-sequence='500'>
							<div class="section-content text-center ">
								<div class="text text-center">08</div>
								<div class="name text-center">Tin tức - Sự kiện
									<div class="clearfix"></div>
									<div class="line-bottom"></div>
								</div>
								<div class="item-icon"><img alt="Nhà mẫu" src="/src/frontend/assets/images/ico-c-utilities.svg"></div>
							</div>
							<div class="item-box-news ">
								<div class="row">
									<div class="images-new col-sm-3">
										<img src="/src/frontend/assets/images/image-03.jpg">
									</div>
									<div class="col-sm-9 hot-news-content">
										<div class="title">
											<a href="#">Thông báo chương trình rút thăm xe Mercedes</a>
										</div>
										<div class="date-time">11/04/2017 08:17:42 AM</div>
										<div class="description">
											<a href="#">Công ty CP Hà Đô – 756 Sài Gòn trân trọng kính mời Quý Khách Hàng đủ điều kiện</a>
										</div>
									</div>
								</div>
							</div>
							<!-- news content -->
							<!-- <div class="news-content">
								<div class="item">
									<div class="title">
										<a href="#">Tập đoàn Hà Đô lần thứ 2 liên tiếp vào Top 10 Chủ đầu tư Bất động sản uy tín nhất Việt Nam 2017</a>
									</div>
									<div class="date">13/04/2017 08:59:40 AM</div>
								</div>
								<div class="item">
									<div class="title">
										<a href="#">Tập đoàn Hà Đô lần thứ 2 liên tiếp vào Top 10 Chủ đầu tư Bất động sản uy tín nhất Việt Nam 2017</a>
									</div>
									<div class="date">13/04/2017 08:59:40 AM</div>
								</div>
								<div class="item">
									<div class="title">
										<a href="#">Tập đoàn Hà Đô lần thứ 2 liên tiếp vào Top 10 Chủ đầu tư Bất động sản uy tín nhất Việt Nam 2017</a>
									</div>
									<div class="date">13/04/2017 08:59:40 AM</div>
								</div>
							</div>
						</div>
				</div>
				</div>
			</div>
		</div>  -->
		@include('frontend.news.relate')

		<!-- ưu thế nổi bật -->
		<div class="section animatedParent animateOnce ">
			<div class="container-main group-harmo">
				<div class="container">
					<div class="row">	
						<div class="title text-center">ƯU THẾ NỔI BẬT CỦA VINHOMES THE HARMONY</div>
						<div class="line-bottom"></div>
					</div>
				</div>
				<div class="group-harmo-content">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 item advanter">
								<div class="advanter-left">
									<div class="boot img-circle"><img src="/src/frontend/assets/images/whyus-icon3.png"></div>
								</div>
								<div class="advanter-right text-left">
									<div class="title"> VỊ TRÍ VƯỢNG LỘC ĐẮC TÀI</div>
									<div class="desc"> Tọa lạc tại cửa ngõ phía đông bắc Thủ đô, Vinhomes Riverside là một trong những khu đô thị sinh thái có vị trí đẹp và tiện lợi. Từ đây có thể dễ dàng kết nối linh hoạt với các cụm công trình trọng điểm của thành phố.</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 item advanter">
								<div class="advanter-left">
									<div class="boot img-circle"><img src="/src/frontend/assets/images/whyus-icon3.png"></div>
								</div>
								<div class="advanter-right text-left">
									<div class="title"> CỘNG ĐỒNG DÂN CƯ TRÍ THỨC CAO</div>
									<div class="desc">Dù mới đi vào vận hành khoảng 4 năm nhưng Vinhomes Riverside giai đoạn 1 đã hình thành cộng đồng cư dân văn minh, thân thiện và năng động.Riverside thành điểm đến lý tưởng cho các hoạt động văn hóa lớn.</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 item advanter">
								<div class="advanter-left">
									<div class="boot img-circle"><img src="/src/frontend/assets/images/whyus-icon3.png"></div>
								</div>
								<div class="advanter-right text-left">
									<div class="title"> PHONG THỦY "VƯỢNG LỘC - ĐẮC TÀI"</div>
									<div class="desc"> Các khu biệt thự được bố trí trên những “bán đảo” nhân tạo, xen kẽ giữa vườn cây trải rộng và được ôm trọn bởi hệ thống kênh đào xanh mát. Đây chính là thế đất “vượng lộc – đắc tài”, mang tới vận hội tốt đẹp.</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 item advanter">
								<div class="advanter-left">
									<div class="boot img-circle"><img src="/src/frontend/assets/images/whyus-icon3.png"></div>
								</div>
								<div class="advanter-right text-left">
									<div class="title"> GIÁ TRỊ SỐNG HOÀN HẢO</div>
									<div class="desc"> Là cư dân Vinhomes Riverside, đồng nghĩa với quyền thưởng thức phong cách sống đỉnh cao ngay bên hiên nhà mình: khu mua sắm, khu thể thao, hệ thống trường học, vui chơi giải trí…</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
