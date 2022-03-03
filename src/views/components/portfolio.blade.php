<!--portfolio items-->
@php 
              if(isset($comp->title)):
                $comp_title = explode(' ', $comp->title);
              endif;
          @endphp
<div class="sec-pad r-bg-a" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>	
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
            <h2 @if(isset($comp->title_color)) style="color:{{$comp->title_color}} !important" @endif>
              {{isset($comp_title[0])? $comp_title[0] : $comp->title}}   <span class="ree-tt">{{isset($comp_title[1])? $comp_title[1] :''}} </span> {{isset($comp_title[2])? $comp_title[2] :''}}</h2>
            
			   
			</div>	
		

		 </div>

	<div class="row justify-content-center mt70">
          @foreach($comp->posts as $k => $i)
		<div class="col-lg-4 col-md-6  col-sm-6 mt30">
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
		</div>
        @endforeach
	
    </div>			 
</div>
</div>
	<!--portfolio end-->