    <!--start Hero Section  -->
    <section class="home-hero slide-hero" @if(isset($comp->bg_color)) style="margin-top:85px; background-color:{{$comp->bg_color}}" @endif>      
    <div class="hero-owl owl-carousel"> 
     
  @foreach($comp->posts as $k => $i)
    <div class="slide owlbg11" >
        <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 vcenter">
            <div class="hero-content-x">
              <p class="sub-heading2 mb15 r-bg-x">{{$i->sub_title}}</p>
              <h1 class="mb30" data-aos="fade-in" data-aos-delay="200"><span  style="color:#4a4a4a">{{$i->title}}</span> </h1>
              <p data-aos="fade-in" data-aos-delay="500">{!! $i->short_description !!}
              </p>
              <a href="get-quote.html" class="ree-btn  ree-btn-grdt1 mt40 mw-80" data-aos="fade-in" data-aos-delay="800">Let's Talk <i class="fas fa-arrow-right fa-btn"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 vcenter">
            <div class="sol-image m-mt30">
              <img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($i->image->file_name) ? $i->image->file_name:''}}" alt="{{isset($i->title) ? $i->title :''}}" class="img-fluid" data-aos="fade-in" data-aos-delay="400">
            </div>
          </div>
        </div>
        </div>
        </div>
  @endforeach
    </div>
</section>
    <!--hero Section End-->