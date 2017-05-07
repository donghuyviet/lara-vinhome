<div class="section animatedParent animateOnce fp-section">
			<div class="slide-main">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php $i=0; ?>
						@foreach($slide as $sli)
						    <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"@if($i == 0) 
						    class="active"
						    @endif
						    ></li>
						<?php $i++; ?>
						@endforeach
					</ol>

			  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  <?php $i=0; ?>
				    @foreach($slide as $item) <div
				   	@if($i==0)
					     class="item active "
					@else
						class="item"
					@endif
					>
				    <?php $i++; ?>
				      <img src="/uploads/admin/slide/{{$item->images}}" alt="{{$item->title}}">
				      <div class="carousel-caption">
				        {{$item->title}} <br>
				        <span>{{$item->description}}</span>
				      </div>
				    </div>
				    @endforeach
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>