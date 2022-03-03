<div class="mobile-menu2">
            <ul class="mob-nav2">
              <li><a href="/cms/quote" class="ree-btn2 ree-btn-grdt1"><i class="fas fa-envelope-open-text"></i></a></li>
              <li class="navm-"><a class="toggle" href="#"> <span></span> </a> </li>
            </ul>
          </div>
		  <!-- mobile Nav -->
          <nav id="main-nav">
            <ul>  
              @foreach($menus as $v)
                  <li><a href="#">{{isset($v->menu_name) ? $v->menu_name :'' }}</a>
                  @if(!empty($v->child) && is_array($v->child))
                  <ul>
                    @foreach($v->child as $v)
                      <li><a href="{{empty($v->child)? $v->link:'#' }} ">{{isset($v->menu_name) ? $v->menu_name :'' }}</a></li>
                      @endforeach
                   </ul>
                   @endif
                  </li>
                  @endforeach
            </ul>
           
          </nav>