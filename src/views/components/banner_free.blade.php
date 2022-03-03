	<!--start Hero Section  -->
	<section class="home-hero-pp" @if(isset($comp->bg_color)) style="margin-top:85px; background-color:{{$comp->bg_color}}" @endif>		
		<div class="container">
		@foreach($comp->posts as $k => $i)			
			<div class="row">
			@if($i->type =="text")
				<div class="col-lg-4 vcenter">
					<div class="hero-content-pp pera-block">
						<span class="sub-heading2 mb15 r-bg-x">{{$i->title}}</span>
						<h1 class="mb20">{{$i->sub_title}}</h1>
						<h5>{{$i->highlight}}</h5>
						<p class="h-light" data-aos="fade-in" data-aos-delay="500">{!! $i->short_description !!}</p>
						<a href="#" class="ree-btn  ree-btn-grdt1 mt40 mw-80" id="bt" data-aos="fade-in" data-aos-delay="800">Enquire now <i class="fas fa-arrow-right fa-btn"></i></a>
					</div>
				</div>
				<div class="col-lg-4 vcenter">
					<div class="sol-image m-mt30">
						<img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" alt="web" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
					</div>
				</div>
				
				<div class="col-lg-4 vcenter">
					<div class="hero-right-cnt">
					@foreach($comp->posts as $kv => $iv)	
						@if($iv->type =="point")
							<div class="media" style="margin-top:20px;">
								<div class="ree-icon-set ree-stat-icn">
									<img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($iv->image->file_name) ? $iv->image->file_name:''}}" alt="web" class="w-100">
								</div>
								<div class="ree-details-set user-info">
									<h5>{{$iv->title}}</h5>
									<p>{!! $iv->short_description !!}</p>
								</div>
							</div>	
						@endif
					@endforeach
					
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>		 
	</section>
	<!--hero Section End-->
