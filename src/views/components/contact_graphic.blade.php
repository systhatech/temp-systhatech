<!--contact info-->
  <div class="contact-form-sec sec-pad r-bg-a" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
		<div class="container">
		   <div class="row">
			  <div class="col-lg-7">
				 <div class="form-contact-hom m-mt60">
					<div class="form-block bg-w">
					   <div class="form-head">
						  <h3>Get in touch.</h3>
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
											<div class="col-md-6"><select name="service">
												<option  value="{{isset($comp->description) ? strtolower(strip_tags($comp->description)) :'Custom'}}">{{isset($comp->description) ? strip_tags($comp->description) :'Custom'}}</option>
											
											</select></div>
										</div>
									
										<div class="fieldsets"><textarea placeholder="Additional details" name="message" style="height:175px;"></textarea></div>
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
			  <div class="col-lg-5">
				 <div class="get-conct-2 pera-block d-ml50">
					<h3>Additional what do you get?</h3>
						<ul style="padding:2%; line-height:2">
					 	  <li style="margin-top:10px"> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							    Website & APP designed with your company look & feel.
								<hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   Professional company logo design.
							   <hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   Content and product descriptions written for you.
							   <hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   Your products and images uploaded for you.
							   <hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   SEO & Google Business listing.
							   <hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   Social Media Pages.
							   <hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   Modification and changes with no extra cost. 
							   <hr>
							</li>
							<li> 
							   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							   Real person one to one support. 
							   <hr>
							</li>
						</ul>
				 </div>
			  </div>
		   </div>
		</div>
	 </div>
	 <!--contact info end-->
