<!--about company-->
<section class="r-bg-c sec-pad" @if(isset($comp->bg_color)) style=" background-color:{{$comp->bg_color}}" @endif>
@foreach($comp->posts as $k => $i)				
    <div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="page-headings side-pghd">
						<span class="sub-heading mb15"><i class="fas fa-calendar mr5"></i>{{$i->title}}</span>
						<h2>{{$i->sub_title}}</h2>
					</div>
				</div>
				<div class="col-lg-8">
					<h4 class="mb15">{{$i->highlight}}</h4>
					<p>{!! $i->short_description !!}</p>
				
				</div>
			</div>
		</div>
        @endforeach
	</section>
	<!--about company end-->