 <!--pricing table-->
 <section class="r-bg-a sec-pad">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12 text-center">
                  <div class="page-headings">
                     <h2 class="mb15"><span class="ree-text rt40">&nbsp;</span>{{$comp->title}}</h2>
                     <p class="mt15">{{$comp->description}}</p>
                  </div>
               </div>                
            </div>            

            <div class="row justify-content-center mt60">
				
					<div class="col-sm-12">
                  <div class="shadows">
						<div class="price-table-heading">
							<ul>
								<li>Category</li>
								<li>Features</li>
								<li>Price</li>
							</ul>
						</div>
						@foreach($comp->posts as $i=>$v)
						<div class="price-table-ree">
							<ul class="price-ree">
								<li class="heading " >{{$v->title}}</li>
								<li class="content" >
								{!! $v->short_description !!} 
								</li>
								<li class="price"  >   
									<span class="price-title">starting from</span>
									<span>{{$v->sub_title}}</span>
									<sup>*</sup> 
									<span class="price-off">
										<span>{!! $v->highlight !!}</span>
										<sup>*</sup>
									</span>
								</li>
							</ul>
						</div>
						@endforeach
					</div>
					</div>
				</div>
         </div>         
      </section>
      <!--pricing table end-->