<!--start work-->
@php 
              if(isset($comp->title)):
                $comp_title = explode(' ', $comp->title);
              endif;
          @endphp
<section class="r-bg-a sec-pad" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-8 vcenter">
            <div class="heading-hz-btn">
            <h2 @if(isset($comp->title_color)) style="color:{{$comp->title_color}} !important" @endif>
              {{isset($comp_title[0])? $comp_title[0] : $comp->title}}   <span class="ree-tt">{{isset($comp_title[1])? $comp_title[1] :''}} </span> {{isset($comp_title[2])? $comp_title[2] :''}}</h2>
            
            </div>
          </div>
          <div class="col-lg-6 col-sm-4 vcenter">
            <div class="link-sol-header">
              <a href="/cms/portfolio" target="_blank" class="ree-card-link">View All <i class="fas fa-arrow-right fa-btn"></i></a>
            </div>
          </div>
        </div>
        <div class="row mt60">
          <div class="col-lg-12">
            <div class="full-work-block  owl-carousel">
            @foreach($comp->posts as $k => $i)
              <div class="fwb-main-x fwb-a">
                <div class="work-thumbnails">
                  <a href="{{isset($i->link_url)? $i->link_url :'#' }}" target="_blank"><img src="{{url('/')}}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" 
                  alt="{{isset($i->title)?$i->title :'' }}" class="img-fluid"> </a>
                </div>
                <div class="work-details">
                  <p class="mb10">{{isset($i->title)? $i->title :'' }}</p>
                  <h4><a href="{{isset($i->link_url)? $i->link_url :'#' }}" target="_blank"> {{isset($i->highlight)?$i->highlight :'' }}</a> </h4>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end work-->