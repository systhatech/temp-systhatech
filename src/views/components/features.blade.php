	<!--Industries-->
	<section class="r-bg-x  sec-pad" @if(isset($comp->bg_color)) style="padding-top:75px; background-color:{{$comp->bg_color}}" @endif>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="page-headings text-center">
						<h2 class="mb15">{{$comp->title}}</h2>
						<p>{{$comp->description}} </p>
					</div>
				</div>
			</div>
			@if($comp->post)
			<div class="row mt30">
			@foreach($comp->posts as $k=> $v)
				<div class="col-lg-3 col-sm-6 col-6"> 
						<div class="industry-workfor" style="background:#fff">
							<img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($v->image->file_name) ? $v->image->file_name:''}}" alt="img"> 
							<h6>{{$v->title}}</h6> 
						</div>
					
					</div>
			
			@endforeach
			</div>
			@endif
		</div>	
	</section>
	<!--Industries end-->