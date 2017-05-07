<!-- Phân Khu -->
		<div class="section animatedParent animateOnce ">
			<div class="container-main group-harmo">
				<div class="container">
					<div class="row">	
						<div class="title text-center">Sản phẩm vinhomes the harmony</div>
						<div class="line-bottom"></div>
						<div class="description text-center">
							<p>
								Mang ý nghĩa về thành phố lãng mạn bên sông, Vinhomes Riverside The Harmony hay còn có tên gọi đầy nghệ thuật Vinhomes Riverside The Harmony chính là bản giao hưởng tuyệt vời giữa thiên nhiên và con người. Dạo bước vào khu đô thị, bạn sẽ có những cảm nhận chân thật nhất về một miền xanh thuần khiết, được lạc vào thế giới của những loài hoa đẹp nhất dọc mỗi con đường
							</p>
						</div>
					</div>
				</div>
				<div class="group-harmo-content">
					<div class="container">
						<div class="row">
							@foreach($relate as $item)
							<div class="col-xs-12 col-sm-3 item">
								<a href="{{URL('tin-tuc',[$item->id,$item->slug])}}.html">
									<div class="title"> {{$item->title}}</div>
									<img src="/uploads/admin/articels/{{$item->images}}">
									<div class="name"> {!!str_limit($item->desc),100 !!}</div>
								</a>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>