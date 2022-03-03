	<!--our work flow-->
	<style> 
	 .week_c{
		font-size: 13px;
    position: absolute;
    	text-align:right;
    padding: 13px 10px 10px 19px;
    color: #ff5b2e;
	 }
	</style>
	<section class="r-bg-d  sec-pad" @if(isset($comp->bg_color)) style=" background-color:{{$comp->bg_color}}" @endif>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="page-headings text-center">
						<h2 class="mb15">{{$comp->title}}</h2>
						<p>{!! $comp->description !!}</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mt30">
			@if($comp->post)
			@php $i = 0; @endphp
			@foreach($comp->posts as $k=> $v)
			@php $i++; @endphp
				<div class="col-lg-3 col-md-4 col-sm-6 mt30">
					<div class="process-content ree-card">
						<span class="week_c"> {{$v->sub_title}}</span>
						<span class="setps hst-1" style="opacity:60">{{$i}}</span>
						<div class="process-block">
							<div class="process-icon">
								<img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($v->image->file_name) ? $v->image->file_name:''}}" alt="service{{$v->title}}" class="icon70 mb20">
							</div>
							<h4>{{$v->title}}</h4>
							<p>{!! $v->highlight !!}</p>
						</div>
					</div>
				</div>
			@endforeach
			@endif
			</div>
		</div>
	</section>
	<!---our work flow end-->
