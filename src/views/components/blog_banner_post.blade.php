	<!--blog-->
	<div class="r-bg-a pt85 pb120" style="background-color:#ffd540">		
		<div class="container">
			<div class="row pt80">
				<div class="col-lg-5">
					<div class="page-headings">
						<span class="sub-heading mb15"><i class="fas fa-book mr5"></i> Blogs & News</span>
						<h1 class="mb15">Our <span class="ree-text rt40">Blog</span></h1>
						<p>What would you love to learn how to do?</p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="ree-subs-from">
						<h4>Subscribe to get the latest insights in your inbox.</h4>
						<small style="color:red; padding :10px; display:none" id='email_newsletter_result'> </small>
						<form class="mt20" action="#" method="post" name="email_newsletter" id="email_newsletter" >
							<input type="text" name="subs" id="subs-email" placeholder="Your email please"
								class="subs-input">
							<button class="ree-btn-grdt1 subs-btn" id="email_newsletter_go" onclick="event.preventDefault();" type="submit"><i class="fas fa-arrow-right"></i></button>
						</form>


					</div>
				</div>
			</div>
			</div>
			</div>

	<div class="blog-block sec-pad pt80" style="background-color:#fbffe0">		
				<div class="container">
			<div class="blog-post" >
				<div class="row">
					@foreach($comp->posts as $k => $i)
					<div class="col-lg-4 col-sm-6">
						<div class="ree-media-crd">
							<div class="rpl-img"><a href="/cms/details/{{$i->id}}"><img src="{{url('/')}}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}"
										alt="blog" class="fill-fixed"> </a> </div>
							<div class="rpl-contt">
								<div class="blog-quick-inf mb20 mt30"><span><i class="far fa-calendar-alt"></i> 12 March 21</span> <span><i class="fas fa-clock"></i> {{isset($i->sub_title)? $i->sub_title :'' }}</span> </div>
								<h4><a href="{{isset($comp->detailpage_link[0]->menu_code) ?  $comp->detailpage_link[0]->link.$comp->detailpage_link[0]->menu_code :'/cms/detail'}}?detail_comp_id={{$comp->detailpage_link[0]->id}}&_detail_post_id={{$i->id}}">{{isset($i->title)? $i->title :'' }}</a>
								</h4>
							</div>
						</div>
					</div>
				@endforeach
		
				</div>
			</div>
		</div>
	</div>
	<!--blog end-->
