<!--start services-->

          @php 
              if(isset($comp->title)):
                $comp_title = explode(' ', $comp->title);
              endif;
          @endphp
<section class="r-bg-i sec-pad"  @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="sec-heading text-center pera-block">
            <h2 @if(isset($comp->title_color)) style="color:{{$comp->title_color}} !important" @endif>
              {{isset($comp_title[0])? $comp_title[0] : $comp->title}}   <span class="ree-tt">{{isset($comp_title[1])? $comp_title[1] :''}} </span> </h2>
            
              <p>{!! isset($comp->description)? $comp->description :'' !!}</p>
            </div>
          </div>
        </div>
        <div class="row mt30">
        @foreach($comp->posts as $k => $i)
          <div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <div class="ree-card r-bg-c mt60">
              <div class="ree-card-img shadows" style="padding:4px; width:100px"><img src="{{url('/')}}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}"  
              alt="{{isset($i->title)?$i->title :'' }}"> </div>
              <div class="ree-card-content mt40">
                <h3 class="mb15"><a href="{{isset($i->link_url)?$i->link_url :'#' }}" target="_blank"> {{isset($i->title)?$i->title :'' }}</a></h3>
                <p style="line-height: 1.6 !important;">{!! isset($i->short_description)?$i->short_description :'' !!}</p>
              </div>
              <div class="ree-card-content-link">
                <a href="{{isset($i->link_url)?$i->link_url :'#' }}" target="_blank" class="ree-card-link mt40">Request Quote <i class="fas fa-arrow-right fa-btn"></i> </a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    
  </section>
    <!--services end--> 