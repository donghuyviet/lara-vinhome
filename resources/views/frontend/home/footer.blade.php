<div class="clearfix"></div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="title"> Lý do chọn chúng tôi</div>
						<ul class="check-list">
							<li>Cung cấp những thông tin nhanh chóng & cập nhật nhất từ chủ đầu tư.</li>
							<li>Hỗ trợ quý khách tìm được căn tầng đẹp nhất.</li>
							<li>Cung cấp bảng giá gốc, hỗ trợ quý khách tìm căn phù hợp với ngân sách.</li>
							<li>Không thu thêm bất cứ khoản phí nào.</li>
							<li>Hỗ trợ làm thủ tục trực tiếp với chủ đầu tư, trước và sau bán hàng lâu dài.</li>
							<li>Hỗ trợ làm thủ tục vay vốn với ngân hàng bảo lãnh.</li>
							<li>Xem nhà mẫu dự án trực tiếp để khách hàng lựa chọn căn hộ ưng ý.</li>
						</ul>
						
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="title">
							ĐƠN VỊ BÁN HÀNG
						</div>	
						<p>
							<img src="/src/frontend/assets/images/logo.png">
						</p>
						<ul>
							<li><strong>Trụ sở :</strong> Tầng 1 &2, Tòa Vimeco, Lô E9 Phạm Hùng, Phường Trung Hòa, Quận Cầu Giấy, Hà Nội</li>

							<li><strong>Chi nhánh : </strong>L2 – 202A – 205 TTTM Vincom Long Biên, Khu đô thị Vinhomes Riverside, Long Biên, Hà Nội</li>

							<li>Hotline : 0912 889 138</li>
							<li>Emai : donghuyviet@gmail.com</li>
						</ul>

					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="title">BẢN ĐỒ DỰ ÁN</div>
						<div class="maps">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14894.362710613686!2d105.91060628837626!3d21.049057921696697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a9076aed9a9f%3A0x61ae20c85b99067f!2zS2h1IMSRw7QgdGjhu4sgVmluaG9tZXMgUml2ZXJzaWRlLCBQaMO6YyBM4bujaSwgTG9uZyBCacOqbiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1493133133056" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						
					</div>
				</div>
				<p class="copy-right"> donghuyviet <span>	&copy;</span> All rights reserved.</p>
			</div>
		</div>
	</footer>
	<!-- scroll fixed extendtion -->
	<div class="">
		<ul class="scroll-info">
			<li><a href="tel:0912889138">
				<span class="text">Hotline <small>0912 889 138</small></span>
				<span class="icon hotline"></span>
			</a></li>
			<li><a href="#" data-toggle="modal" data-target="#download_info">
					<span class="text">Download <small> tài liệu</small></span>
					<span class="icon download"></span>
				</a></li>
			<li><a href="#">
				<span class="text"> Info <small></small></span>
				<span class="icon info"></span>
			</a></li>
		</ul>
		<ul class="mobile-list">
			<li class="hotline"><a href="tel:0912889138"><i class="icon-call"></i> <span>0912 889 138</span></a></li>
			<li class="download"><a href="#" data-toggle="modal" data-target="#download_info"><i class="icon-download"></i><span>Tải báo giá </span> </a></li>
		</ul>
		 <!-- Modal -->
		  <div class="modal fade" id="download_info" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <div class="modal-body download-info">
		          <div class="form-info download" id="form-info">
					<form method="POST" action="{{ url('/store') }}">
						<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<div class="title text-center">Nhận thông tin về dự án</div>
						<div class="form-group col-xs-12 col-sm-12 text-center">
						    <label for="exampleInputName">Họ Tên (*)</label>
						    <input type="text" class="form-control" id="name" name="name" placeholder="Họ Tên">
						</div>
						<div class="form-group col-xs-12 col-sm-12 text-center">
						    <label for="exampleInputPassword1">Điện Thoại (*)</label>
						    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Number phone">
						</div>
						<div class="form-group col-xs-12 text-center">
						    <label for="exampleInputEmail1">Email</label>
						    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
						<button type="submit" class="btn btn-default btn-submit form-group ">Gửi thông tin</button>
						</div>
					
					</form>
				</div>
		        </div>
		      </div>
		      
		    </div>
		  </div>
	</div>
	