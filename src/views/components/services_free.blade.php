<!--start services-->
<section class="r-bg-i sec-pad">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="sec-heading text-center pera-block">
						<h2>{{isset($comp->title)? $comp->title :''}}</h2>
						<p>{!! isset($comp->description)? $comp->description :'' !!}</p>
					</div>
				</div>
			</div>

			<div class="row mt30">
			@php 
				$color_code = array('reebga', 'reebgb', 'reebgc', 'reebgd','reebga', 'reebgb', 'reebgc', 'reebgd' ); 
			@endphp

			@foreach($comp->posts as $k => $i)
				<div class="col-lg-3 col-sm-6 mt30" data-aos="fade-up" data-aos-delay="100">
					<div class="ree-card {{isset($color_code[$k])? $color_code[$k] : 'reebga' }}">						
						<div class="creative-cntnt">
							<h4 class="mb15"><a href="service-details.html"> {{isset($i->title)?$i->title :'' }}</a></h4>
							<p>{{isset($i->highlight)?$i->highlight :'' }}</p>
						</div>
						<div class="creative-img"><img src="{{url('/')}}/getFile?path=cms/post&file={{$i->image->file_name ? $i->image->file_name:''}}" alt="{{isset($i->title)?$i->title :'' }}" class="img-fluid"></div>						
					</div>
				</div>
				@endforeach
			
				
			</div>	
		</div>
	</section>
	<!--services end--> 