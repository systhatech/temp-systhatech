<!--Start Preloader -->
<div class="onloadpage" id="page-load">
      <div class="loader-div">
        <div class="on-img"><img src="/systhatech/images/loader.gif" alt="Logo" class="img-fluid" /><span>Loading Please Wait...</span></div>
      </div>
    </div>
    <!--End Preloader -->
    <!--Start Header-->
    <style> 
    .menu-block-set {
      border-top:2px solid {{(isset($comp->title_color)) ? $comp->title_color :'#ff5b2e'}} !important ;
    }
    #hc-nav-1-nav-title {
      background : {{(isset($comp->bg_color)) ? $comp->bg_color :'#ff5b2e'}} !important ;
      color :{{(isset($comp->title_color)) ? $comp->title_color :'#fff'}} !important ;
    }

   #scrollUp {
   background-color : {{(isset($comp->bg_color)) ? $comp->bg_color :'#ff5b2e'}} !important ;
  
   }

    </style>
    <header class="ree-header fixed-top"  @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}}" @endif>
      <div class="container-fluid m-p-l-r-0">
        <div class="menu-header horzontl">
          <div class="menu-logo">
            <div class="dskt-logo"><a class="nav-brand" href="/">	<img src="/getFile?path=venndors/attachments&file={{$vendor->profile_pic}}" alt="{{$vendor->name}}" class="ree-logo" style="max-height:50px;" /> </a> </div>
          </div>
          <div class="ree-nav" role="navigation">
            <ul class="nav-list">
            @foreach($menus as $v)
            <li class="megamenu mega-small">
                <a href="{{empty($v->child)? $v->link:'#' }} "  class="menu-links" data-route="{{$v->link}}">{{isset($v->menu_name)?$v->menu_name :''}}</a>
                @if(!empty($v->child) && is_array($v->child))
                <div class="menu-dropdown">
                  <div class="menu-block-set"> 
                    @foreach($v->child as $v)
                    <a class="dropdown-item" href="{{$v->link}}">{{$v->menu_name}}</a>
                    @endforeach
                  </div>
                </div>
                @endif
              </li>
              @endforeach
            </ul>
          </div>
          <div class="ree-nav-cta">
            <ul>
              <li><a href="/cms/quote" target="_blank" class="ree-btn ree-btn0 ree-btn-grdt2"> Request Quote</a> </li>
            </ul>
          </div>
         @include('systhatech::components.mobile_nav')
        </div>
      </div>
    </header>
    <!-- Header End -->