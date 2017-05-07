<div class="recent-post">
<div class="title"> Tin tức mới nhất</div>
<div>
	<ul>
		@foreach ($news as $new)
		<li>
			<a href="{{URL('tin-tuc',[$new->id,$new->slug])}}.html">
				{{$new->title}}
			</a>
		</li>
		@endforeach
	</ul>
	</div>
</div>