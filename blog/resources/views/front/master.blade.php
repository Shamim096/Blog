<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <title>BIZTROX | @yield('title')</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('front.includes.assets.style')
</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{ asset('/') }}front/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
@include('front.includes.header')


<!-- /navigation -->

@yield('body')

<!-- footer -->
@include('front.includes.footer')
<!-- /footer -->

@include('front.includes.assets.script')
</body>

<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:05 GMT -->
</html>
