
<div class="list-cate">
	<div class="title">
		Danh mục
	</div>	
	<ul class="category">
		@foreach($sidebar as $side)
		<li 
		<?php $i=0;?>
		@if($i==0)
		class=""
		@else
			class="active"
		@endif
		>
	    <?php $i++; ?>
		<a href="{{URL('danh-muc',[$side->id, $side->slug])}}.html"> {{$side->title_cate}}</a></li>
		@endforeach
	</ul>
</div>