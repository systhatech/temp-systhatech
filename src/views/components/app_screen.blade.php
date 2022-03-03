<!--item screen-->
<section class="home-partners-block r-bg-x sec-pad" @if(isset($comp->bg_color)) style=" background-color:{{$comp->bg_color}}" @endif>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="sec-heading text-center">
					<h2 class="mb15">{{$comp->title}}</h2>
					<p>{!! $comp->description !!}</p>
				</div>
			</div>
		</div>
		<div class="app-screenss owl-carousel mt70 dottss">
		@if($comp->post)
			@foreach($comp->posts as $k=> $v) 
			<div class="appscreen"> <div class="itme-img"><img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($v->image->file_name) ? $v->image->file_name:''}}" alt="{{$v->title}}" class="img-fluid"></div> </div>
			@endforeach
			@endif
		</div>	
		</div>
	</section>
<!--item screen end-->