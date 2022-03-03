	<!--page head-->
	<section class="page-heading-sec about-pag-head pt85 pb120"  @if(isset($comp->bg_color)) style="margin-top:85px; background-color:{{$comp->bg_color}}" @endif>
    @foreach($comp->posts as $k => $i)		
		<div class="container">
			<div class="row pt80">
				<div class="col-lg-6">
					<div class="page-heading mr25">
						<span class="sub-heading mb15" data-aos="fade-up" data-aos-delay="200"><i class="fas fa-building mr5"></i> {{$i->title}}</span>
						<h1 data-aos="fade-up" data-aos-delay="400"> {{$i->sub_title}}</h1>
						<p class="mt30 h-light" data-aos="fade-up" data-aos-delay="600" style="font-family: Roboto,sans-serif !important">{!! $i->short_description !!}</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="sol-img m-mt30">
						<img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" alt="Systha Tech" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
					</div>
				</div>
			</div>
			
		</div>
        @endforeach
	</section>
	<!--page head end-->