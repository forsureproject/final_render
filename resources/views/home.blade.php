<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon_io/favicon.ico') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <title>Forsure Real Estate Ltd</title>

    {{-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700"
        rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css" integrity="sha512-SagM1PHxt5mWDyWARVY6UOdhM5A8J+R1UqIWcGfiwOd+be7uHQagB+JQOmfVZF8jjJQqbyuWzw/KXfb4yqjBkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <div class="animsition">
        <div class="wrapper boxed">

            <!-- Content CLick Capture-->

            <div class="click-capture"></div>

            <!-- Sidebar Menu-->

            <div class="menu">
                <span class="close-menu icon-cross2 right-boxed"></span>
                <div class="menu-lang right-boxed">
                    <a href="">Login</a>
                    <a href="">Signup</a>
                </div>
                <ul class="menu-list right-boxed">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="#">Why Us?</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="menu-footer right-boxed">
                    <div class="social-list">
                        <a href="" class="icon ion-social-twitter"></a>
                        <a href="" class="icon ion-social-facebook"></a>
                        <a href="" class="icon ion-social-googleplus"></a>
                        <a href="" class="icon ion-social-linkedin"></a>
                        <a href="" class="icon ion-social-dribbble-outline"></a>
                    </div>
                    <div class="inline-block">Forsure Real Estate Ltd. &copy; <span class="currentYear"></span>. All
                        Rights
                        Resevered</div>
                </div>
            </div>

            <!-- Navbar -->

            <header class="navbar boxed js-navbar">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="brand" href="#">
                    <img alt="" src="images/brand.png">
                    <div class="brand-info">
                        <div class="brand-name">Forsure</div>
                        <div class="brand-text">Real Estate</div>
                    </div>
                </a>

                <div class="social-list hidden-xs">
                    <a href="" class="icon ion-social-twitter"></a>
                    <a href="" class="icon ion-social-facebook"></a>
                    <a href="https://www.youtube.com/@forsure-realty" class="icon ion-social-youtube"></a>
                    <a href="" class="icon ion-social-linkedin"></a>
                    <!-- <a href="" class="icon ion-social-dribbble-outline"></a> -->
                </div>

                <div class="navbar-spacer hidden-sm hidden-xs"></div>

                <address class="navbar-address hidden-sm hidden-xs">call us: <span class="text-dark">(+233) 020 133 4183
                </address>
            </header>

            <!-- Jumbotron -->

            <main class="jumbotron">

                <!-- Start revolution slider -->

                <div class="rev_slider_wrapper">
                    <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
                        <ul>

                            <!-- Slide 1 -->

                            <li data-transition='slideleft' data-slotamount='default' data-masterspeed="1000"
                                data-fsmasterspeed="1000">

                                <!-- Main image-->

                                <img src="images/slider/slide1.jpg" data-bgparallax="5" alt=""
                                    data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    class="rev-slidebg">

                                <!-- Layer 1 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-250']" data-width="270" data-height="5" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                                <!-- Layer 2 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['370']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                                <!-- Layer 3 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                                <!-- Layer 4 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                                <!-- Layer 5 -->

                                <div class="slider-title tp-caption tp-resizeme" data-x="['left']"
                                    data-hoffset="['156']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-30']" data-textAlign="['left']"
                                    data-fontsize="['72', '63','57','50']" data-lineheight="['72','68', '62','54']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                    data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">The
                                    luxury<br> residence in<br> forest
                                </div>


                                <!-- Layer 6 -->

                                <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                                    data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                    data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05"
                                    style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">
                                    Residential
                                </div>

                                <!-- Layer 7 -->

                                <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                                    data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05" style="font-weight:600;">
                                    <a href="" class="link-arrow">See project <i
                                            class="icon ion-ios-arrow-thin-right"></i>
                                    </a>
                                </div>
                            </li>

                            <!-- Slide 2 -->

                            <li data-transition='slideleft' data-slotamount='default' data-masterspeed="1000"
                                data-fsmasterspeed="1000">

                                <!-- Main image-->

                                <img src="images/slider/slide2.jpg" data-bgparallax="5" alt=""
                                    data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    class="rev-slidebg">

                                <!-- Layer 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-250']" data-width="270" data-height="5"
                                    data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                                <!-- Layer 2 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['370']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                                <!-- Layer 3 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                                <!-- Layer 4 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                                <!-- Layer 5 -->

                                <div class="slider-title tp-caption tp-resizeme" data-x="['left']"
                                    data-hoffset="['156']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-30']" data-textAlign="['left']"
                                    data-fontsize="['72', '63','57','50']" data-lineheight="['72','68', '62','54']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                    data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">
                                    Small<br> House Near<br> Wroclaw
                                </div>


                                <!-- Layer 6 -->

                                <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                                    data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                    data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05"
                                    style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">House
                                </div>

                                <!-- Layer 7 -->

                                <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                                    data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05" style="font-weight:600; ">
                                    <a href="" class="link-arrow">See project <i
                                            class="icon ion-ios-arrow-thin-right"></i>
                                    </a>
                                </div>
                            </li>

                            <!-- Slide 3 -->

                            <li data-transition='slideleft' data-slotamount='default' data-masterspeed="1000"
                                data-fsmasterspeed="1000">

                                <!-- Main image-->

                                <img src="images/slider/slide3.jpg" data-bgparallax="5" alt=""
                                    data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    class="rev-slidebg">

                                <!-- Layer 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-250']" data-width="270" data-height="5"
                                    data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                                <!-- Layer 2 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['370']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                                <!-- Layer 3 -->
                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                                <!-- Layer 4 -->

                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                    data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                    data-type="shape" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                                <!-- Layer 5 -->

                                <div class="slider-title tp-caption tp-resizeme" data-x="['left']"
                                    data-hoffset="['156']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-30']" data-textAlign="['left']"
                                    data-fontsize="['72', '63','57','50']" data-lineheight="['72','68', '62','54']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                    data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">The
                                    luxury<br> residence in<br> forest
                                </div>


                                <!-- Layer 6 -->

                                <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                                    data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                    data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05"
                                    style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">
                                    Residential
                                </div>

                                <!-- Layer 7 -->

                                <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                                    data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                    data-elementdelay="0.05" style="font-weight:600; ">
                                    <a href="" class="link-arrow">See project <i
                                            class="icon ion-ios-arrow-thin-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </main>

            <div class="content">

                <!-- Section About -->

                <section class="section-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <strong class="section-subtitle">about us</strong>
                                <h2 class="section-title section-about-title">Tailor Made Real Estate Solutions</h2>
                                <p>
                                    We are a multifunctional registered limited liability Real Estate company
                                    well-versed in legal acquisition of Title land, building and constructing of
                                    projects suitable for residential and commercial purposes. We are abreast with
                                    documentations having well experienced professionals in our team that make sure all
                                    documentations are legit before handing over to our valued clients. We have years of
                                    experience in building and architecture having expertise in the area of architecture
                                    and construction.


                                </p>
                                <br>
                                <p>
                                    In other to maintain, protect our brands identity we are over protective of our
                                    lands because we are mindful of what many go through when it comes to purchasing a
                                    land and most importantly building on it especially when the owners are staying
                                    abroad. So we have outlined a principle of not just selling the land but giving a
                                    package of which one must buy the land and we build on it for the client giving them
                                    a very affordable cost based on their design chosen with payments done in
                                    installation with terms and conditions applied.

                                </p>
                                <div class="experience-box">
                                    <div class="experience-border"></div>
                                    <div class="experience-content">
                                        <div class="experience-number">26</div>
                                        <div class="experience-info wow fadeInDown">Years<br>Experience<br>Working
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="dots-image">
                                    <img alt="" class="about-img img-responsive" src="images/plan1.jpg">
                                    <div class="dots"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section Projects -->

                <section class="section-projects section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <h2 class="section-title">Latest Projects</h2>
                            </div>
                            <div class="col-lg-7">
                                <div class="filter-content">
                                    <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
                                        <li class="active"><a href="#" class="all" data-filter="*">All</a>
                                        </li>
                                        <li><a href="#" data-filter=".building">Building </a></li>
                                        <li><a href="#" data-filter=".interior-exterior">Interior & Exterior
                                            </a></li>
                                    </ul>
                                    <a href="" class="view-projects">View All Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-carousel owl-carousel">
                        <div class="project-item item-shadow building">
                            <img alt="" class="img-responsive" src="images/projects/1-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Triangle<br>Concrete House<br>On Lake</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow building">
                            <img alt="" class="img-responsive" src="images/projects/2-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Ocean<br>Museum<br>Italy</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow building">
                            <img alt="" class="img-responsive" src="images/projects/3-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Milko<br>Co-Working<br>Building</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow building">
                            <img alt="" class="img-responsive" src="images/projects/4-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Redesign<br>Interior For<br>Villa</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow interior-exterior">
                            <img alt="" class="img-responsive" src="images/projects/5-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Wooden<br>Hozirontal<br>Villa</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow interior-exterior">
                            <img alt="" class="img-responsive" src="images/projects/6-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Small<br>House Near<br>Wroclaw</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow interior-exterior">
                            <img alt="" class="img-responsive" src="images/projects/7-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Bellecomde<br>Holiday<br>Residence</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="project-item item-shadow interior-exterior">
                            <img alt="" class="img-responsive" src="images/projects/8-426x574.jpg">
                            <div class="project-hover">
                                <div class="project-hover-content">
                                    <h3 class="project-title">Cubic<br>Inter Mesuem<br>In Rome</h3>
                                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                        elit. Proin nunc
                                        leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt
                                        velit nec laoreet
                                        semper...</p>
                                </div>
                            </div>
                            <a href="" class="link-arrow">See project <i
                                    class="icon ion-ios-arrow-right"></i></a>
                        </div>
                    </div>
                </section>

                <!-- Section Clients -->

                <section class="section-clients section bg-dots">
                    <div class="container">
                        <h2 class="section-title">From Great Our Clients</h2>
                        <div class="client-carousel owl-carousel">
                            <div class="client-carousel-item">
                                <img alt="" class="client-img" src="images/clients/1-92x92.jpg">
                                <div class="client-box">
                                    <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
                                    <div class="client-title">
                                        <span class="client-name">Adam Stone</span>
                                        <span class="client-company">/ CEO at Google INC</span>
                                    </div>
                                    <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                        nibh. at magna
                                        akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                </div>
                            </div>
                            <div class="client-carousel-item">
                                <img alt="" class="client-img" src="images/clients/2-92x92.jpg">
                                <div class="client-box">
                                    <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
                                    <div class="client-title">
                                        <span class="client-name">Anabella Kleva </span>
                                        <span class="client-company">/ Managerment at Envato</span>
                                    </div>
                                    <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                        nibh. at magna
                                        akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                </div>
                            </div>
                            <div class="client-carousel-item">
                                <img alt="" class="client-img" src="images/clients/1-92x92.jpg">
                                <div class="client-box">
                                    <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
                                    <div class="client-title">
                                        <span class="client-name">Adam Stone</span>
                                        <span class="client-company">/ CEO at Google INC</span>
                                    </div>
                                    <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                        nibh. at magna
                                        akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup. Sed
                                        elit quam, iaculis
                                        sed semper sit amet udin vitae nibh</p>
                                </div>
                            </div>
                            <div class="client-carousel-item">
                                <img alt="" class="client-img" src="images/clients/2-92x92.jpg">
                                <div class="client-box">
                                    <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
                                    <div class="client-title">
                                        <span class="client-name">Adam Stone</span>
                                        <span class="client-company">/ CEO at Google INC</span>
                                    </div>
                                    <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                        nibh. at magna
                                        akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                                </div>
                            </div>
                        </div>
                        <div class="partner-carousel owl-carousel">
                            <div class="partner-carousel-item">
                                <img alt="" src="images/partners/1.png">
                            </div>
                            <div class="partner-carousel-item">
                                <img alt="" src="images/partners/2.png">
                            </div>
                            <div class="partner-carousel-item">
                                <img alt="" src="images/partners/3.png">
                            </div>
                            <div class="partner-carousel-item">
                                <img alt="" src="images/partners/4.png">
                            </div>
                            <div class="partner-carousel-item">
                                <img alt="" src="images/partners/5.png">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section News -->

                <section class="section-news section">
                    <div class="container">
                        <h2 class="section-title">Latest News <a href="" class="link-arrow-2 pull-right">All
                                Articles <i class="icon ion-ios-arrow-right"></i></a></h2>
                        <div class="news-carousel owl-carousel">
                            <div class="news-item">
                                <img alt="" src="images/news/1-370x370.jpg">
                                <div class="news-hover">
                                    <div class="hover-border">
                                        <div></div>
                                    </div>
                                    <div class="content">
                                        <div class="time">Dec 15th, 2016</div>
                                        <h3 class="news-title">Discover Architecture Of Bario</h3>
                                        <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing
                                            elit. Mauris vel
                                            auctorol est. Integer nunc ipsum...</p>
                                    </div>
                                    <a class="read-more" href="#">Continue</a>
                                </div>
                            </div>
                            <div class="news-item">
                                <img alt="" src="images/news/2-370x370.jpg">
                                <div class="news-hover">
                                    <div class="hover-border">
                                        <div></div>
                                    </div>
                                    <div class="content">
                                        <div class="time">Dec 15th, 2016</div>
                                        <h3 class="news-title">Discover Architecture Of Bario</h3>
                                        <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing
                                            elit. Mauris vel
                                            auctorol est. Integer nunc ipsum...</p>
                                    </div>
                                    <a class="read-more" href="#">Continue</a>
                                </div>
                            </div>
                            <div class="news-item">
                                <img alt="" src="images/news/3-370x370.jpg">
                                <div class="news-hover">
                                    <div class="hover-border">
                                        <div></div>
                                    </div>
                                    <div class="content">
                                        <div class="time">Dec 15th, 2016</div>
                                        <h3 class="news-title">Discover Architecture Of Bario</h3>
                                        <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing
                                            elit. Mauris vel
                                            auctorol est. Integer nunc ipsum...</p>
                                    </div>
                                    <a class="read-more" href="#">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Footer -->

            <footer id="footer" class="footer section">
                <div class="footer-flex">
                    <div class="flex-item">
                        <a class="brand pull-left" href="#">
                            <img alt="" src="images/brand.png">
                            <div class="brand-info">
                                <div class="brand-name">Forsure</div>
                                <div class="brand-text">Real Estate Ltd.</div>
                            </div>
                        </a>
                    </div>
                    <div class="flex-item">
                        <div class="inline-block">Forsure Real Estate Ltd. &copy;<br> <span
                                class="currentYear"></span>. All Rights
                            Resevered</div>
                    </div>
                    <div class="flex-item">
                        <ul>
                            <li><a href="">Site Map</a></li>
                            <li><a href="">Term & Conditions</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Help</a></li>
                        </ul>
                    </div>
                    <div class="flex-item">
                        <ul>
                            <li><a href="">Our Location</a></li>
                            <li><a href="">Career</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="flex-item">
                        <ul>
                            <li class="active"><a href="">Login</a></li>
                            <li class="active"><a href="">Signup</a></li>

                        </ul>
                    </div>
                    <div class="flex-item">
                        <div class="social-list">
                            <a href="" class="icon ion-social-twitter"></a>
                            <a href="" class="icon ion-social-facebook"></a>
                            <a href="" class="icon ion-social-googleplus"></a>
                            <a href="" class="icon ion-social-linkedin"></a>
                            <a href="" class="icon ion-social-dribbble-outline"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sly/1.6.1/sly.min.js"
        integrity="sha512-uR46GOwRUepFi2dzcatO3qpr4onAj46VC9ltPFIwaX8YXl5O18nVT/JnJZY7yqrrKUP0ngD/YjuatsJqCDpYyg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="js/animsition.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"
        integrity="sha512-pYd2QwnzV9JgtoARJf1Ui1q5+p1WHpeAz/M0sUJNprhDviO4zRo12GLlk4/sKBRUCtMHEmjgqo5zcrn8pkdhmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-base/8.2.2/stellar-base.min.js" integrity="sha512-tp5/CyNp7vtqAmbdDrDmAkwse5eHYQtGnswNmGEPHgqpAWD6LJ3XifMnDOQ1OAjueJcyaHiR1xFhjbALa3OalA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js" integrity="sha512-HYG9E+RmbXS7oy529Nk8byKFw5jqM3R1zzvoV2JnltsIGkK/AhZSzciYCNxDMOXEbYO9w6MJ6SpuYgm5PJPpeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- <script src="js/isotope.pkgd.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="{{  asset('/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{  asset('/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{  asset('/js/plugins.js') }}"></script>




    <!-- Slider revolution -->
    <script src="{{  asset('js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{  asset('js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>


    <!-- Slider revolution 5x Extensions   -->
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>


    <!-- Scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/rev-slider-init.js') }}"></script>
    <script>
        // Get the current year using JavaScript
        const currentDateYear = new Date().getFullYear();

        // Update all span elements with the class "currentYear" with the current year
        const elements = document.getElementsByClassName("currentYear");
        for (let i = 0; i < elements.length; i++) {
            elements[i].innerHTML = currentDateYear;
        }
    </script>

</body>

</html>
