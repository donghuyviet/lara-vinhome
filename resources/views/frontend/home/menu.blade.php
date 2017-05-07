<header>
		<nav class="navbar header " role="navigation" data-spy="affix" data-offset-top="10" style="z-index: 5;">
			<div class="container container-lg">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button " class="navbar-toggle button-menu" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo" href="#"><img src="/src/frontend/assets/images/logo-top.jpg"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav ">
						<li><a href="{{url('/')}}" class="active">Trang Chủ</a></li>
						<?php $menu = DB::table('category')->where('parent_id',0)->orderBy('position','ASC')->get();?>
						@foreach ($menu as $level_1)
						<li><a href="{{URL('',[ $level_1->slug])}}.html" class="active">{{$level_1->title_cate}}</a>
							<!-- menu cấp 1 -->
						</li>
						@endforeach
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

	</header>