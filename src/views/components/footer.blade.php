    <!--start footer -->
    <footer class="footer-a" @if(isset($comp->bg_color)) style="background-color:{{$comp->bg_color}} !important" @endif>
      <div class="footer-fist-row pt40">
        <div class="container">
          <div class="footer-rowset">
            <div class="col footer-head">
              <h5>Contact info</h5>
              <ul class="footer-links-list social-linkz">
                <li><a href="tel:+{isset($contacts[0]->phone_no) ? $contacts[0]->phone_no :"" }}><span><i class="fas fa-phone-square-alt"></i></span>{{isset($contacts[0]->phone_no) ? $contacts[0]->phone_no :"" }} </a></li>
                <li><a href='email:{{isset($contacts->email) ? $contacts->email :"" }}'><span><i class="fas fa-envelope"></i></span> {{isset($contacts[0]->email) ? $contacts[0]->email :"" }}</span></a></li>
                <li><a href="#" class="contact-addressii"><i class="fas fa-map-marker-alt"></i> 
                &nbsp; &nbsp;  {!! isset($address->add1) ? $address->add1.", <br> " :"" !!}
                &nbsp; &nbsp;   &nbsp;&nbsp;&nbsp; {{ isset($address->city) ? $address->city.", " :"" }}
                    {{ isset($address->state) ? $address->state.", " :"" }}
                    {{ isset($address->zip) ? " -".$address->zip :"" }}
				      	</a>
              </li>
              </ul>
            </div>
            <div class="col footer-head">
              <h5>Follow Us</h5>
              <ul class="footer-links-list social-linkz">
                <li><a href="https://www.facebook.com/systhatech" target="_blank"><span><i class="fab fa-facebook-f"></i></span> Facebook</a>	</li>
                <li><a href="https://twitter.com/systhatech" target="_blank"><span><i class="fab fa-twitter"></i></span> Twitter </a>	</li>
                <li><a href="https://www.instagram.com/systhatech/" target="_blank"><span><i class="fab fa-instagram"></i></span> Instagram</a> </li>
                <li><a href="javascript:void(0)"><span><i class="fab fa-youtube"></i></span> Youtube</a> </li>
              </ul>
            </div>
            <div class="col footer-head" style="display:none">
              <h5>Services</h5>
              <ul class="footer-links-list">
                @foreach($footer_menu as $k=> $v)
                 <li><a href="{{isset($v->link) ? $v->link:''}} " target="_blank">{{$v->menu_name}}</a></li>
                @endforeach
             </ul>
            </div>
            
            @foreach($custom_menu as $ii=> $vi)
            <div class="col footer-head">
              @if($ii==0)
              <h5>Services</h5>
              @else
              <h5>&nbsp;</h5>
              @endif
              <ul class="footer-links-list">
                @foreach($vi as $ki)
                    <li><a href="{{isset($ki->link) ? $ki->link:''}} " target="_blank">{{isset($ki->menu_name) ? $ki->menu_name:''}}</a></li>
                @endforeach
                   </ul>
            </div>
            @endforeach

           
              @foreach($product_menu as $i=> $v)
            <div class="col footer-head">
              @if($i==0)
              <h5>Products</h5>
              @else
              <h5>&nbsp;</h5>
              @endif
              <ul class="footer-links-list">
                @foreach($v as $k)
                    <li><a  href="{{isset($k->link) ? $k->link:''}} " target="_blank">{{isset($k->menu_name) ? $k->menu_name :''}}</a></li>
                @endforeach
                  </ul>
            </div>
            @endforeach
          </div>
        </div>
        <br>
       
        