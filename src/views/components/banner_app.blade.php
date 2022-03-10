 <!--start Hero Section  -->
 <section class="home-app hero-sec r-bg-x" @if(isset($comp->bg_color)) style="min-height:724px; background-color:{{$comp->bg_color}}" @endif>
         <div class="container">
          @foreach($comp->posts as $k => $i)
         @if($i->type !="point")
            <div class="row">
               <div class="col-lg-6 vcenter">
                  <div class="hero-content-a">
                       <h1 class="mb10" data-aos="fade-in" data-aos-delay="200">{{$i->title}}</h1>
                       <h5 class="mb10">{{$i->sub_title}}  </h5>
                     <p class="zup" data-aos="fade-in" data-aos-delay="500">{!! $i->short_description !!}</p>
                     
                     <div class="uniq-points mt40" data-aos="fade-in" data-aos-delay="800">
                     @php $co = array('uca', ' ucb',' ucc','uca', ' ucb',' ucc') ; $v=0; @endphp
                     @foreach($comp->posts as $a => $m) 
                      @if($m->type == "point")
                     <div class="uniq-card {{$co[$v]}}">
                           <div class="sol-image m-mt30">
                        <img style="width:50px; padding-right:10px;" src="{{ url('/') }}/getFile?path=cms/post&file={{isset($m->image->file_name) ? $m->image->file_name:''}}" alt="web" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
                     </div>
                         
                           <h6>{{$m->title}}  <small>  <br>{!! $m->short_description !!}</small></h6>
                        </div>
                        @php $v++; @endphp
                        @endif

                        @endforeach  
                     </div>
                     <div class="btn-sets2 vcenter  mt20" data-aos="fade-in" data-aos-delay="1100">
                        <a href="#" class="ree-btn  ree-btn-grdt1 mt40 mw-80" id="bt1" data-aos="fade-in" data-aos-delay="800">Enquire now <i class="fas fa-arrow-right fa-btn"></i></a>  
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 vcenter">
                  <div class="sol-image m-mt30">
                  <img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" alt="{{isset($i->title) ? $i->title :''}}" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
                    </div>
               </div>
            </div>
            @endif
            @endforeach
         </div>
      </section>
      <!--hero Section End-->