	 <!--creative portfolio-->
	 <section class="dark-light-a sec-pad" @if(isset($comp->bg_color)) style=" background-color:{{$comp->bg_color}}" @endif>
		<div class="container">
		   <div class="row justify-content-center">
			  <div class="col-lg-8 col-sm-8 vcenter text-center">
				 <div class="page-headings text-center">
					<h2 class="mb15">{{$comp->title}}</h2>
					<h2 class="w-txt">{!! $comp->description !!} </h2>
				 </div>
			  </div>
		   </div>
		   <div class="row mt20 dark-bg">
		   @if($comp->post)
			@foreach($comp->posts as $k=> $v) 
		  	 <div class="col-lg-4 col-sm-4 mt40 img-hover">
				 <div class="work-thumbnail">
					<a href="{{isset($v->link_url) ? $v->link_url : '#'  }}" target="_blank"> <img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($v->image->file_name) ? $v->image->file_name:''}}" alt="{{$v->title}}" class="img-fluid" style="max-height:230px;"> </a>
				 </div>
				 <div class="port-title mt20">
					{!! $v->title !!}
				 </div>
			  </div>
			  @endforeach
			@endif
		   </div>
		   <div class="row justify-content-center text-center mt60" style="display:none">
			  <div class="col-lg-10">
				 <div class="cta-heading-wide-bt">
					<h3 class="w-txt">Take a look of our quality work</h3>
					<a href="portfolio.html" class="ree-btn  ree-btn-grdt1 mw-80 no-shadows">View All Work <i class="fas fa-arrow-right fa-btn"></i></a> 
				 </div>
			  </div>
		   </div>
		</div>
	 </section>
	 <!--end portfolio-->