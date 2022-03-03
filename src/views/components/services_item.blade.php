	<!--Marketing service-->
	<section class="r-bg-x  sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="page-headings m-center">
						<h3>{!! $comp->description !!}</h3>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="ml25 m-ml0 m-mt60">
						<h2 class="h1a m-center">{{$comp->title}}</h2>
						<div class="services-blocks-set mt30">
                        @if($comp->post)
                        @foreach($comp->posts as $k=> $v)
							<div class="servic-block-a">
								<img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($v->image->file_name) ? $v->image->file_name:''}}" alt="service" class="icon70 mb20">
								<a href="service-details.html" class="link-serv"><i class="fas fa-arrow-right"></i></a>
								<h4 class="mb15"><a href="service-details.html">{{$v->title}}</a></h4>
								<p>{!! $v->highlight !!}</p>
							</div>
                            @endforeach
                            @endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Marketing service end-->