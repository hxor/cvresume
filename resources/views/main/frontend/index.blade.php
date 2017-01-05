@extends('layouts.frontend.app')

@section('content')
  <!--==========================================
                  PRE-LOADER
===========================================-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>{{ $pro->firstname }} {{ $pro->lastname }}</h2>
                <h6>{{ $pro->title }}</h6>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                    HEADER
===========================================-->
@include('main.frontend.partials._header')
<!--==========================================
                   ABOUT
===========================================-->
@include('main.frontend.partials._about')

<!--==========================================
                   EDUCATION
===========================================-->
@include('main.frontend.partials._education')


<!--==========================================
                   SKILLS
===========================================-->
@include('main.frontend.partials._skill')


<!--==========================================
                   EXPERIENCE
===========================================-->
@include('main.frontend.partials._experience')


<!--==========================================
                  MODALS
===========================================-->

@include('main.frontend.partials._modals')

<!--==========================================
                  PORTFOLIOS
===========================================-->
@include('main.frontend.partials._portfolio')


<!--==========================================
                   INTEREST
===========================================-->
@include('main.frontend.partials._interest')


<!--==========================================
             TESTIMONIALS AND CLIENTS
===========================================-->
@include('main.frontend.partials._testimonial')

<!--==========================================
             BLOG
===========================================-->
{{-- @include('main.frontend.partials._blog') --}}

<!--==========================================
                  CONTACT
===========================================-->
@include('main.frontend.partials._contact')

<!--SCROLL TO TOP-->
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

<!--==========================================
                      FOOTER
===========================================-->

<footer>
    <div class="container">
        <!--FOOTER DETAILS-->
        <p class="text-center">
            © Material CV. All right reserved by
            <a href="http://trimatrixlab.com/" target="_blank">
                <strong>Trimatrixlab</strong>
            </a>
        </p>
    </div>
</footer>
@stop