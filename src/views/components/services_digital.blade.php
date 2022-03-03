 <!--start services-->
            @php 
              if(isset($comp->title)):
                $comp_title = explode(' ', $comp->title);
              endif;
          @endphp
 <section class="r-bg-i sec-pad digi-service" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="sec-heading text-center pera-block">
          <h2 @if(isset($comp->title_color)) style="color:{{$comp->title_color}} !important" @endif>
              {{isset($comp_title[0])? $comp_title[0] : $comp->title}}   <span class="ree-tt">{{isset($comp_title[1])? $comp_title[1] :''}} </span> {{isset($comp_title[2])? $comp_title[2] :''}}</h2>
         <p>{!! isset($comp->description)? $comp->description :'' !!}</p>
          </div>
        </div>
      </div>
      <div class="row mt30">
      @php 
				$color_code = array('reebga', 'reebgb', 'reebgc', 'reebgd','reebga', 'reebgb', 'reebgc', 'reebgd' ); 
        $color_code = array('reebga', 'reebga', 'reebga', 'reebga','reebga', 'reebga', 'reebga', 'reebga' ); 
			@endphp
      
			@foreach($comp->posts as $k => $i)
        <div class="col-lg-3 col-sm-6 mt30" data-aos="fade-up" data-aos-delay="100">
          <div class="ree-card bhv-tt">
            <div class="creative-img {{isset($color_code[$k])? $color_code[$k] : 'reebga' }}"><img src="{{url('/')}}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" 
            alt="{{isset($i->title)?$i->title :'' }}" class="img-fluid"></div>
            <div class="creative-cntnt">
              <h4 class="mb15"><a href="service-details.html">  {{isset($i->title)?$i->title :'' }}</a></h4>
              <p>{{isset($i->highlight)?$i->highlight :'' }}</p>
              <a href="{{isset($i->link_url)?$i->link_url :'#' }}" class="ree-card-link mt30">Reqeust Demo <i class="fas fa-arrow-right fa-btn"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      </div>
    </section>
    <!--services end--> 