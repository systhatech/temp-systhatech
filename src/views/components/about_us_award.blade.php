	<!--company awards-->
	<section class="r-bg-x sec-pad pt90"  @if(isset($comp->bg_color)) style=" background-color:{{$comp->bg_color}}" @endif>
    @foreach($comp->posts as $k => $i)
    @if($i->type =="text")			
    <div class="container">
			<div class="row">
				<div class="col-lg-4 mt30 m-mt0">
					<div class="page-headings side-pghd">
						<span class="sub-heading mb15">{{$i->title}}</span>
						<h2>{{$i->sub_title}}</h2>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
                    @foreach($comp->posts as $kv => $iv)	
						@if($iv->type =="point")
						<div class="col-lg-6 col-sm-6 mt30">
							<div class="ree-card ico-cont">
								<div class="ic-img mb20"> <img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($iv->image->file_name) ? $iv->image->file_name:''}}" alt="Award Reevan">
								</div>
								<div class="ic-cont">
									<h4>{{$iv->title}}</h4>
									<p class="mt15">{!! $iv->short_description !!} </p>
								</div>
							</div>
						</div>
                        @endif
					@endforeach
					</div>
				</div>
			</div>
		</div>
        @endif
		@endforeach
	</section>
	<!--company awards end-->
