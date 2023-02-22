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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css"
        integrity="sha512-SagM1PHxt5mWDyWARVY6UOdhM5A8J+R1UqIWcGfiwOd+be7uHQagB+JQOmfVZF8jjJQqbyuWzw/KXfb4yqjBkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <x-layouts.menu />
            </div>

            <x-layouts.header />

        <main class="jumbotron">

            <!-- Start revolution slider -->

            @if (isset($slider))
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
            @endif
        </main>
        <div class="content">
            <!-- Section About -->
            {{ $slot }}
        </div>
    </div>

    <!-- jQuery -->

    <x-layouts.footer-layout />
    <x-layouts.scripts />
</div>
</body>

</html>
