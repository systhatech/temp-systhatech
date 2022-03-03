   <!--start technologies-->
   <section class="r-bg-x zup sec-pad">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="sec-heading text-center pera-block">
              <h2>{{$comp->title}}</h2>
              <p>{!! $comp->description !!}</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10 mt60">
            <div class="tab-17 tabs-layout">
              <ul class="nav nav-tabs justify-content-center" id="myTab3" role="tablist">
              @if(isset($cato[$comp->component_name]))
              @php $v=0 @endphp
                 @foreach($cato[$comp->component_name] as $y=> $z)
                  <li class="nav-item">
                  <a class="nav-link {{($v==0)? 'active' :'' }}" id="tab{{$y}}a" data-toggle="tab" href="#tab{{$y}}" role="tab" aria-controls="tab{{$y}}" aria-selected="{{($v==0)?true :false }}">{{$y}}</a>
                </li>
                @php $v++ @endphp
                @endforeach
              @endif  
           </ul>
              <div class="tab-content" id="myTabContent3">
              @if(isset($cato[$comp->component_name]))   
               @foreach($cato[$comp->component_name] as $ya=> $za)
                <div class="tab-pane fade active show" id="tab{{$ya}}" role="tabpanel" aria-labelledby="tab{{$ya}}a">
                  <div class="tab-data-cont">
                    <div class="row justify-content-center">
                    @foreach($za as $ay =>$az )
                      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="icon-with-title">
                          <a href="javascript:void(0)">
                            <div class="iwt-icon"> <img src="{{ url('/') }}/getFile?path=cms/post&file={{isset($az['image']['file_name']) ? $az['image']['file_name']:''}}"
                              alt="Apple"> </div>
                            <div class="iwt-content">
                              <p>{{$az['title']}}</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
                @endif  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end technologies-->