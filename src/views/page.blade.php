@foreach($comp_post as $comp)
    @if(View::exists('systhatech::components.'.$comp->component_name))
        @include('systhatech::components.'.$comp->component_name)
    @endif

@endforeach