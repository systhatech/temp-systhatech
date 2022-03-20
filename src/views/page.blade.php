<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBHM22S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@foreach($comp_post as $comp)
    @if(View::exists('systhatech::components.'.$comp->component_name))
        @include('systhatech::components.'.$comp->component_name)
    @endif

@endforeach