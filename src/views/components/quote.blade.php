  <!--contact info-->
  <style>
  .owl-dots {
    bottom : 5px IM !important;
  }
  </style>
  <div class="contact-form-sec sec-pad r-bg-d" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
		<div class="container">
        @foreach($comp->posts as $k => $i)
         @if($i->type !="point")
				<div class="row flx-end">				
					<div class="col-lg-6">
						<div class="sec-heading m-center">
							<img style="filter: drop-shadow(0 0 0.75rem #b99928); max-width:350px" src="{{ url('/') }}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" alt="{{$i->title}}" >
							<br>
                            <br>
                            <h2 class="mb15">{{$i->sub_title}}</h2>
							<p>{{$i->highlight}}</p>
						</div>
						<div class="trust-logo-block mt60" style="display:none">
                         <div class="ree-card"> 
                             {!! $i->short_description !!} 
                            </div>
						</div>

                        <div class="ree-card mt30 trust-review owl-carousel">
						@foreach($comp->posts as $ki => $ii)
                         @if($ii->type =="point")	
                        <div class="items">
                            <div class="row justify-content-between">
                                <div class="col-lg-10 cinftt">
                                    <div class="media">
                                    <div class="ree-icon-set w80">
                                        <img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($ii->image->file_name) ? $ii->image->file_name:''}}" alt="{{$ii->title}}" class="w-100">
                                    </div>
                                    <div class="ree-details-set pera-block">
                                        <h4>{{$ii->title}}</h4>
                                        <span class="trm" style="margin-top:-5px; font-size:16px"> {!! $ii->short_description !!} </span>
                                    </div>
                                    </div>
                                </div>
                               
                                </div>

						</div>
                            @endif
                        @endforeach    
							

						</div>

                </div>    
					<div class="col-lg-6">
						<div class="form-contact-hom m-mt60">
							<div class="form-block bg-w">
								<div class="form-head"><h4>Request Quote</h4>
                                 <hr>
                                <span id="result" style="color:red; font-size:16px; display:none"> </span>
                            </div>
								<div class="form-body" id="response">
									<form action="#" method="post" name="enq" id='enq'>
										<div class="fieldsets row">
											<div class="col-md-6"><input type="text" data-valid="0" id="name" placeholder="Full Name" name="name"></div>
											<div class="col-md-6"><input type="email"data-valid="0" id="email"  placeholder="Email Address" name="email"></div>
										</div>
                                        <input type="hidden" name="_token" value ="{{csrf_token()}}" >
										<div class="fieldsets row">
											<div class="col-md-6"><input type="number" data-valid="0" id="phone" placeholder="Contact Number" name="phone"></div>
											<div class="col-md-6"><select name="service" style="display:none">
												<option>Custom Quote</option>
											
											</select></div>
										</div>
									
										<div class="fieldsets"><textarea placeholder="Write your idea" name="message" style="height:175px;"></textarea></div>
											<div class="fieldsets mt20"> <button type="submit" id="sub" name="submit" class="ree-btn  ree-btn-grdt1 w-100">Submit<i class="fas fa-arrow-right fa-btn"></i></button> </div>
										<p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>

										<div class="form-btm-set text-center mt15">
										<h5>We Deliver</h5>

										<div class="icon-setss mt20">										
											
											<div class="icon-rows">
												<div class="icon-imgg"><img src="/systhatech/images/icons/money.svg" alt="#"></div>
												<div class="icon-txt"><p>Best Price</p> </div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="/systhatech/images/icons/quality.svg" alt="#"></div>
												<div class="icon-txt"><p>Quality Service</p> </div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="/systhatech/images/icons/call-agent.svg" alt="#"></div>
												<div class="icon-txt"><p>Good Support</p> </div>
											</div>
											<div class="icon-rows">
												<div class="icon-imgg"><img src="/systhatech/images/icons/satisfaction.svg" alt="#"></div>
												<div class="icon-txt"><p>Satisfaction</p> </div>
											</div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>					
				</div>
				</div>	
                @endif
                @endforeach			
			</div>
	 <!--contact info end-->


