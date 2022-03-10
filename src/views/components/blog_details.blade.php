		<!--blog details-->

		<div class="r-bg-a pt85 pb80">		
			<div class="container w-992">
				<div class="row pt80">
					<div class="col-lg-12">
						<div class="page-headings text-center">
							<ul class="breadcrus mb20">
								<li class="bread-activ"><a href="#">{{isset($detail_post[0]->category) ? $detail_post[0]->category :'' }}</a></li>
							</ul>
							<h1>{{isset($detail_post[0]->title) ? $detail_post[0]->title :'' }}</h1>
							
						</div>
							
							<div class="info-b-center" style="text-align:center; padding-top:25px">Publish at <span>{{ date("m/d/y", strtotime($detail_post[0]->created_at)) }}</span> </div>
					</div>
				</div>
				</div>
				</div>

			<div class="r-bg-x pb120">		
			 <div class="container w-992">
				<div class="blog-details">
					<div class="row">
						<div class="col-lg-12">
							<div class="sol-img mt60">
							<img style="display:none" src="{{ url('/') }}/getFile?path=cms/post&file={{isset($detail_post[0]->image->file_name) ? $detail_post[0]->image->file_name:''}}" alt="{{isset($detail_post->title) ? $detail_post->title :'' }}" class="img-fluid" data-aos="fade-in" data-aos-delay="400">	
							
								
							</div>
							<div class="ree-blog-details">
								
								{!! isset($detail_post[0]->description) ? $detail_post[0]->description : ''  !!}
							</div>

							<div class="center-btn"> <a href="/cms/blog/" class="ree-btn  ree-btn-grdt2 mr20">Back to Blogs <i class="fas fa-arrow-left fa-btn"></i></a> </div>

						</div>
					</div>
					</div>
					</div>
				</div>
				<!--blog details end-->

			