<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
   @include("partials.client.head")
</head>

<body>
<div class="lm-animated-bg" style="background-image: url({{asset('assets/client')}}/img/main_bg.png);"></div>

<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>

<div class="page">

    <div class="page-content">

        @include('partials.client.header')

        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>

        @yield('content')

    </div>
</div>
    @include('partials.client.footer-scripts')
</body>

</html>
