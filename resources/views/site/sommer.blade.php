<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>
        <title>{{ $setting->title }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,300i,400,400i,500,600,700,700i">

        <link rel="stylesheet" href="js/vendor/essential-grid/css/settings.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/tpl-essential-grids.css" type="text/css" media="all" />

        <link rel="stylesheet" href="js/vendor/revslider/css/settings.css" type="text/css" media="all" />

        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-layout.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/wp-cloudy/css/wpcloudy.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/wp-cloudy/css/wpcloudy-anim.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/core.animation.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/skin.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/plugin.woocommerce.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/grid.css" type="text/css" media="all" />

        <link rel="stylesheet" href="js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/core.messages/core.messages.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/swiper/swiper.min.css" type="text/css" media="all" />

        <link rel="icon" href="http://placehold.it/32x32" sizes="32x32" />
        <link rel="icon" href="http://placehold.it/32x32" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/32x32" />
    </head>

    <body class="page body_filled article_style_stretch scheme_original top_panel_show top_panel_over sidebar_hide">
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                <!-- Header -->
                <header class="top_panel_wrap top_panel_style_6 top_panel_position_over">
                    <div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_over">
                        <div class="top_panel_middle">
                            <div class="content_wrap">
                                <!-- Contact logo -->
                                <div class="column-1_3 contact_logo">
                                    <div class="logo">
                                        <a href="/">



                                            <img src="{{ asset('uploads/'.$setting->logo_sommer)}}" class="logo_main" alt="logo">
                                            <img src="http://placehold.it/292x99" class="logo_fixed" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- /Contact logo -->
                                <!-- Main menu -->
                                <div class="column-2_3 menu_main_wrap">
                                    <nav class="menu_main_nav_area menu_hover_slide_line">
                                        <ul id="menu_main" class="menu_main_nav">
                                            <!-- Menu: Home -->
                                            <li class="menu-item">
                                                <a href="/"><span>Home</span></a>
                                            </li>
                                            <!-- /Menu: Home -->

                                            <!-- Menu: Classes -->
                                            <li class="menu-item">
                                                <a href="winter"><span>Winter</span></a>
                                            </li>
                                            <!-- /Menu: Classes -->
                                            <!-- Menu: Rent -->
                                            <li class="menu-item">
                                                <a href="sommer-prices" target="_blank"><span>Prices</span></a>
                                            </li>
                                            <!-- /Menu: Rent -->
                                            <!-- Menu: Contact Us -->
                                            <li class="menu-item">
                                                <a href="contact-us"><span>Contact Us</span></a>
                                            </li>
                                            <!-- /Menu: Contact Us -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- /Main menu -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- /Header -->
                <!-- Header mobile -->
                <div class="header_mobile">
                    <div class="container">
                        <div class="menu_button icon-menu"></div>
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo_light.png" class="logo_main" alt="">
                            </a>
                        </div>
                        <!-- /Logo -->
                    </div>
                    <div class="side_wrap">
                        <div class="close">Close</div>
                        <div class="panel_top">
                            <nav class="menu_main_nav_area">
                                <!-- Mobile Menu -->
                                <ul id="menu_mobile" class="menu_main_nav">
                                    <!-- Menu: Home -->
                                    <li class="menu-item current-menu-ancestor">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <!-- /Menu: Home -->
                                    <!-- Menu: Sommer -->
                                    <li class="menu-item current-menu-ancestor">
                                        <a href="sommer.html"><span>Sommer</span></a>
                                    </li>
                                    <!-- /Menu: Sommer -->
                                    <!-- Menu: Rent -->
                                    <li class="menu-item">
                                        <a href="sommer-prices" target="_blank"><span>Prices</span></a>
                                    </li>
                                    <!-- /Menu: Rent -->
                                    <li class="menu-item">
                                        <a href="contact-us"><span>Contact Us</span></a>
                                    </li>
                                </ul>
                                <!-- /Mobile Menu -->
                            </nav>
                        </div>
                        <div class="panel_bottom"></div>
                    </div>
                    <div class="mask"></div>
                </div>
                <!-- /Header mobile -->
                <!-- Revolution Slider section -->
                <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_slider_1">
                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper relative fullscreen-container" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.3.1.5 fullscreen mode -->
                        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" data-version="5.3.1.5">
                            <ul>
                                <!-- SLIDE  -->
                                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://placehold.it/100x50" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <!-- <img src="images/slider-1/slider_bg.webp" alt="" title="slider_bg" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> -->
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-2-layer-15" data-x="-355" data-y="54" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":290,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slider-1/slide02_level_03.webp" alt="" data-ww="1214px" data-hh="873px" width="1214" height="873" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 2 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-2-layer-14" data-x="-1348" data-y="211" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:left;skX:45px;","speed":530,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:left;skX:45px;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide01_level_02_ext.png" alt="" data-ww="4000px" data-hh="3000px" width="4000" height="3000" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 3 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-2-layer-3" data-x="677" data-y="159" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":900,"to":"o:1;","delay":500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slider-1/slide01_level_06.webp" alt="" data-ww="1215px" data-hh="694px" width="1215" height="694" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 4 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-2-layer-17" data-x="-307" data-y="100" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":1210,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"x:right;","ease":"Back.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide01_level_03.png" alt="" data-ww="964px" data-hh="831px" width="964" height="831" data-no-retina>
                                    </div> -->
                                    <div class="slid-text-wrap sommer-slide">
                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption slider_1_slide_1_1 tp-resizeme" id="slide-2-layer-5" data-x="153" data-y="379" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","speed":1440,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"Power2.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Herzlich Willkommen!</div>
                                        <!-- LAYER NR. 6 -->
                                        <div class="tp-caption slider_1_slide_1_2 tp-resizeme" id="slide-2-layer-6" data-x="-99" data-y="459" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1540,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"x:-50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Ihr E-Bike Center Team Ellmau </div>
                                        <!-- LAYER NR. 7 -->
                                        <div class="tp-caption slider_1_slide_1_3 tp-resizeme" id="slide-2-layer-7" data-x="100" data-y="559" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1700,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"y:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Biancas Sport Shop </div>
                                        <!-- LAYER NR. 8 -->
                                    </div>
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-2-layer-18" data-x="-352" data-y="9" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1850,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"x:50px;opacity:0;","ease":"Back.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide01_level_05.png" alt="" data-ww="1623px" data-hh="905px" width="1623" height="905" data-no-retina>
                                    </div> -->
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://placehold.it/100x50" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <!-- <img src="images/slider-1/slider_bg.webp" alt="" title="slider_bg" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> -->
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 9 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-3-layer-7" data-x="-354" data-y="54" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":590,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:left;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slider-1/slide02_level_03.webp" alt="" data-ww="1214px" data-hh="873px" width="1214" height="873" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 10 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-3-layer-2" data-x="-1348" data-y="211" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:bottom;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide02_level_02_ext.png" alt="" data-ww="4000px" data-hh="3000px" width="4000" height="3000" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 11 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-3-layer-3" data-x="-175" data-y="69" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":680,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slider-1/slide02_level_06.webp" alt="" data-ww="1752px" data-hh="951px" width="1752" height="951" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 12 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-3-layer-8" data-x="-314" data-y="102" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":640,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:-50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide02_level_03.png" alt="" data-ww="964px" data-hh="831px" width="964" height="831" data-no-retina>
                                    </div> -->
                                    <div class="slid-text-wrap sommer-slide">
                                        <!-- LAYER NR. 13 -->
                                        <div class="tp-caption slider_1_slide_2_1 tp-resizeme" id="slide-3-layer-4" data-x="151" data-y="379" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;opacity:0;","speed":1030,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"y:-50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Herzlich Willkommen! </div>
                                        <!-- LAYER NR. 14 -->
                                        <div class="tp-caption slider_1_slide_2_2 tp-resizeme" id="slide-3-layer-5" data-x="32" data-y="461" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1220,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Ihr E-Bike Center Team Ellmau </div>
                                        <!-- LAYER NR. 15 -->
                                        <div class="tp-caption slider_1_slide_2_3 tp-resizeme" id="slide-3-layer-6" data-x="-95" data-y="558" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1400,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"y:bottom;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Biancas Sport Shop </div>
                                        <!-- LAYER NR. 16 -->
                                    </div>
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-3-layer-9" data-x="-666" data-y="27" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1710,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:-50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide02_level_05.png" alt="" data-ww="1970px" data-hh="905px" width="1970" height="905" data-no-retina>
                                    </div> -->
                                </li>
                                <!-- SLIDE  -->
                                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://placehold.it/100x50" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <!-- <img src="images/slider-1/slider_bg.webp" alt="" title="slider_bg" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> -->
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 17 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-1-layer-10" data-x="-349" data-y="56" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:left;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slider-1/slide02_level_03.webp" alt="" data-ww="1214px" data-hh="873px" width="1214" height="873" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 18 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="-1348" data-y="170" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":670,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"y:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide03_level_02_ext.png" alt="" data-ww="4000px" data-hh="3000px" width="4000" height="3000" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 19 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-1-layer-12" data-x="507" data-y="191" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":900,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:-50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slider-1/slide03_level_06.webp" alt="" data-ww="1086px" data-hh="833px" width="1086" height="833" data-no-retina>
                                    </div> -->
                                    <!-- LAYER NR. 20 -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-1-layer-16" data-x="-315" data-y="100" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:50px;opacity:0;","speed":1160,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:-50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide03_level_03.png" alt="" data-ww="964px" data-hh="831px" width="964" height="831" data-no-retina>
                                    </div> -->
                                    <div class="slid-text-wrap sommer-slide">
                                        <!-- LAYER NR. 21 -->
                                        <div class="tp-caption slider_1_slide_3_1 tp-resizeme" id="slide-1-layer-13" data-x="-38" data-y="377" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-200px;skX:85px;opacity:0;","speed":1250,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:left;skX:45px;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Herzlich Willkommen!</div>
                                        <!-- LAYER NR. 22 -->
                                        <div class="tp-caption slider_1_slide_3_2 tp-resizeme" id="slide-1-layer-14" data-x="32" data-y="462" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:right;skX:-85px;","speed":1330,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"x:right;skX:-85px;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Ihr E-Bike Center Team Ellmau </div>
                                        <!-- LAYER NR. 23 -->
                                        <div class="tp-caption slider_1_slide_3_3 tp-resizeme" id="slide-1-layer-15" data-x="-93" data-y="559" data-width="['616']" data-height="['27']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1440,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"y:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Biancas Sport Shop </div>
                                        <!-- LAYER NR. 24 -->
                                    </div>
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-1-layer-17" data-x="-671" data-y="27" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1700,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"rZ:0deg;sX:0.7;sY:0.7;opacity:0;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Back.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="images/slide03_level_05.png" alt="" data-ww="1970px" data-hh="905px" width="1970" height="905" data-no-retina>
                                    </div> -->
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom"></div>
                        </div>
                        <video autoplay muted loop id="myVideo">
                            <source src="videos/1029733649-preview.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </section>
                <!-- /Revolution Slider section -->
                <!-- Page content wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item post_item_single page">
                            <section class="post_content">
                                <!-- Info -->
                                <div class="sc_section margin_top_6em margin_bottom_5_5em">
                                    <div class="sc_section_inner">
                                        <div class="content_wrap">
                                            <div class="sc_section_content_wrap">
                                                <!-- <div class="custom_title_1 text_align_left">01</div> -->
                                                <div class="sc_skills sc_skills_counter margin_top_tiny" data-type="counter" data-caption="Skills">
                                                    <h6 class="sc_skills_subtitle sc_item_subtitle">Herzlich Willkommen!</h6>
                                                    <h2 class="sc_skills_title sc_item_title sc_item_title_with_descr">Ihr E-Bike Center Team Ellmau/ Biancas Sport Shop</h2>
                                                    <div class="sc_skills_descr sc_item_descr">
                                                        E-Bikeverleih in Ellmau <br>
                                                        Die Region Wilder Kaiser  bietet ein breites Angebot an Bikestrecken - zum Biken auf Abwegen und auf Straßen - sanfte Touren im Tal  und herausfordernde Wege bis in 1900 Meter Höhe. Die passenden Bikes dazu erhalten Sie natürlich bei uns. Die Region Ellmau am Wilder Kaiser (Bergdoktor) ist für Mountainbiker und Tourenfahrer (City Bikes) die feine Mischung aus Naturerlebnissen und sportlichen Höhepunkten. Jedes Jahr wird an neuen Möglichkeiten für Radfahrer gearbeitet. Bekannt ist Ellmau als Filmkulisse , Aktuell wird der Bergdoktor und Soko Kitz Gedreht. Wir bieten die neuesten E-Bikes zu Top Preisen an.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Info -->
                                <!-- Classes -->
                                <div class="our_classes_section">
                                    <div class="columns_wrap sc_columns columns_nofluid no_margins sc_columns_count_4 custom_service_columns " data-equal-height=".sc_column_item">
                                        <div class="column-1_4 sc_column_item sc_column_item_1 odd first">
                                            <div class="sc_section margin_top_medium margin_right_medium margin_bottom_medium margin_left_medium">
                                                <div class="sc_section_inner">
                                                    <div class="sc_section_content_wrap">
                                                        <h5 class="sc_title sc_title_regular margin_top_2_2em margin_bottom_0_7em color_white">BIANCAS SPORT SHOP</h5>
                                                        <h2 class="sc_title sc_title_underline_dark margin_top_null margin_bottom_small color_white">Online reservieren</h2>
                                                        <p class="our_classes_text">Bei ONLINE – Reservierung erhalten Sie 10% Nachlass auf Ihre Skiausrüstung!</p>
                                                        <a href="{{$setting->booking_link  }}" target="_blank" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium  sc_button_iconed icon-right-small sc_button_hover_fade">ONLINE RESERVIERUNG</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="column-1_4 sc_column_item sc_column_item_2 even">
                                        <div class="sc_services_wrap">
                                            <div class="sc_services sc_services_style_services-2 sc_services_type_icons width_100_per">
                                                <div class="sc_services_item sc_services_item_1 odd first">
                                                    <div class="sc_services_item_featured post_featured">
                                                        <div class="post_thumb" data-image="" data-title="Private Lessons for Beginners">
                                                            <a class="hover_icon hover_icon_link" href="service-single.html">
                                                                <img alt="image-1.jpg" src="images/h-1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="sc_services_item_overlay">
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_subtitle">Famillien Angebot 1</h4>
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="https://easyresv3.wintersteiger.at/index_easyrent.php?step=0&disgr_intnr=&shop_id=100086">
                                                                       {{$setting->box1}}</a>
                                                                </h4>
                                                                <!-- <div class="sc_services_item_description">
                                                                    <a href="service-single.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">From $200</a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="column-1_4 sc_column_item sc_column_item_3 odd">
                                        <div class="sc_services_wrap">
                                            <div class="sc_services sc_services_style_services-2 sc_services_type_icons width_100_per">
                                                <div class="sc_services_item sc_services_item_1 odd first">
                                                    <div class="sc_services_item_featured post_featured">
                                                        <div class="post_thumb" data-image="" data-title="Group Lessons for Beginners">
                                                            <a class="hover_icon hover_icon_link" href="post-single.html">
                                                                <img alt="" src="images/h-2.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="sc_services_item_overlay">
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_subtitle">Famillien Angebot 2</h4>
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="https://easyresv3.wintersteiger.at/index_easyrent.php?step=0&disgr_intnr=&shop_id=100086">
                                                                        {{$setting->box2}}</a>
                                                                </h4>
                                                                <!-- <div class="sc_services_item_description">
                                                                    <a href="service-single.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">From $150</a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="column-1_4 sc_column_item sc_column_item_4 even">
                                        <div class="sc_services_wrap">
                                            <div class="sc_services sc_services_style_services-2 sc_services_type_icons width_100_per">
                                                <div class="sc_services_item sc_services_item_1 odd first">
                                                    <div class="sc_services_item_featured post_featured">
                                                        <div class="post_thumb" data-image="" data-title="Advanced Group Lessons">
                                                            <a class="hover_icon hover_icon_link" href="service-single.html">
                                                                <img alt="" src="images/h-3.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="sc_services_item_overlay">
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_subtitle">Famillien Angebot 3</h4>
                                                                <h4 class="sc_services_item_title">
                                                                    <a href="https://easyresv3.wintersteiger.at/index_easyrent.php?step=0&disgr_intnr=&shop_id=100086">  {{$setting->box3}}</a>
                                                                </h4>
                                                                <!-- <div class="sc_services_item_description">
                                                                    <a href="service-single.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">From $400</a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /Classes -->

                                <!--prices-->
                                <div class="sc_section margin_top_6em margin_bottom_5_5em">
                                    <div class="sc_section_inner">
                                        <div class="content_wrap">
                                            <div class="sc_section_content_wrap">
                                                <div class="sc_skills sc_skills_counter margin_top_tiny" data-type="counter" data-caption="Skills">

                                                    <h2 class="sc_skills_title sc_item_title sc_item_title_with_descr">Bei Abschluss von einem „Rundum sorglos Paket</h2>
                                                    <div class="sc_skills_descr sc_item_descr">
                                                        sind sämtliche Schäden am Fahrrad abgedeckt* <br>
                                                        *Ausgenommen vom „Bike Schutzpaket“  sind mutwillige Beschädigungen, Rahmenpruch und Diebstahl!
                                                        Der/die Mieter/in erklärt,
                                                        auf eigene Gefahr den Mietartikel zu benutzen
                                                        und auf sämtliche Haftungsansprüche aufgrund Personen- und/oder Sachschäden zu verzichten,
                                                        da er/sie selber haftbar ist!
                                                        Das „Bike Schutzpaket“ ist keine Haftpflicht, Personen oder Sachschaden Versicherung!)
                                                    </div>
                                                    <div class="sc_services_item_description pdf-file-btn">
                                                        <a href="sommer-prices" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small sc_button_hover_fade">Ski Verleih Preise</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/prices-->





                                <!-- The Essential Grid -->
                                <article class="myportfolio-container custom-1" id="esg-grid-1-1-wrap">
                                    <div id="esg-grid-1-1" class="esg-grid">
                                        <ul>
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="1" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">
                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '6'],
                                                            ['type', '=', '2']])->first();@endphp


                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt="">
                                                    </div>
                                                    {{-- <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <div class="esg-overlay esg-fade eg-custom-skin-1-container" data-delay="0"></div>
                                                        <div class="esg-center eg-custom-skin-1-element-10-a">
                                                            <a class="eg-custom-skin-1-element-10" href="post-single.html" target="_self">Glacier National Park Backpacking Packing List</a>
                                                        </div>
                                                        <div class="esg-center eg-custom-skin-1-element-12-a">
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Community and People">Community and People</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <!-- /Grid item -->
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="2" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">
                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '4'],
                                                            ['type', '=', '2']])->first();@endphp
                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt=""  >
                                                    </div>
                                                    {{-- <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <div class="esg-overlay esg-fade eg-custom-skin-1-container" data-delay="0"></div>
                                                        <div class="esg-center eg-custom-skin-1-element-10-a">
                                                            <a class="eg-custom-skin-1-element-10" href="post-single.html" target="_self">Downhill Skiing or Snowboarding: Training Tips and Exercises</a>
                                                        </div>
                                                        <div class="esg-center eg-custom-skin-1-element-12-a">
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Competitions" rel="category tag">Competitions</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <!-- /Grid item -->
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="1" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">

                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '2'],
                                                            ['type', '=', '2']])->first();@endphp
                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt=""  width="1024px" height="650">
                                                    </div>
                                                    {{-- <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <div class="esg-overlay esg-fade eg-custom-skin-1-container" data-delay="0"></div>
                                                        <div class="esg-center eg-post-1 eg-custom-skin-1-element-10-a">
                                                            <a class="eg-custom-skin-1-element-10" href="post-single.html" target="_self">Glide Waxing Your Skis or Snowboard</a>
                                                        </div>
                                                        <div class="esg-center eg-post-1 eg-custom-skin-1-element-12-a">
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Community and People">Community and People</a>
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Mounthood">Mounthood</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <!-- /Grid item -->
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="1" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">

                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '12'],
                                                            ['type', '=', '2']])->first();@endphp

                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt="">
                                                    </div>
                                                    {{-- <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <div class="esg-overlay esg-fade eg-custom-skin-1-container" data-delay="0"></div>
                                                        <div class="esg-center eg-custom-skin-1-element-10-a">
                                                            <a class="eg-custom-skin-1-element-10" href="post-single.html" target="_self">Avalanche Safety Gear: How to Choose</a>
                                                        </div>
                                                        <div class="esg-center eg-custom-skin-1-element-12-a">
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Competitions">Competitions</a>
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Places">Places</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <!-- /Grid item -->
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="1" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">
                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '10'],
                                                            ['type', '=', '2']])->first();@endphp
                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt="">
                                                    </div>
                                                    {{-- <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <div class="esg-overlay esg-fade eg-custom-skin-1-container" data-delay="0"></div>
                                                        <div class="esg-center eg-custom-skin-1-element-10-a">
                                                            <a class="eg-custom-skin-1-element-10" href="post-single.html" target="_self">Snowboarding: Making Waves on the Slopes</a>
                                                        </div>
                                                        <div class="esg-center eg-custom-skin-1-element-12-a">
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Places">Places</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <!-- /Grid item -->
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="2" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">
                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '8'],
                                                            ['type', '=', '2']])->first();@endphp
                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt="">
                                                    </div>
                                                    {{-- <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <div class="esg-overlay esg-fade eg-custom-skin-1-container" data-delay="0"></div>
                                                        <div class="esg-center eg-custom-skin-1-element-10-a">
                                                            <a class="eg-custom-skin-1-element-10" href="post-single.html" target="_self">A Perfect Day for Snowboarding in Venice</a>
                                                        </div>
                                                        <div class="esg-center eg-custom-skin-1-element-12-a">
                                                            <a class="eg-custom-skin-1-element-12" href="#" title="View all posts in Mounthood">Mounthood</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </li>
                                            <!-- /Grid item -->
                                        </ul>
                                    </div>
                                </article>
                                <div class="clear"></div>
                                <!-- /The Essential Grid -->

                                <!-- Services-->
                                <div class="content_wrap">
                                    <div class="sc_services_wrap">
                                        <div style="margin-top:0 !important" class="sc_services sc_services_style_services-1 sc_services_type_icons margin_top_medium margin_bottom_medium width_100_per">
                                            <div class="sc_columns columns_wrap">
                                                <div class="column-1_3 column_padding_bottom">
                                                    <div class="sc_services_item sc_services_item_1 odd first">
                                                        <span class="sc_icon icon-mobile-1"></span>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title">Rufen Sie einfach an</h4>
                                                            <div class="sc_services_item_description">
                                                                <p>+43 670 5555 409</p>
                                                                <p> oder nutzen Sie unser <a href="contact-us.html">Kontaktformular</a>.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div class="column-1_3 column_padding_bottom">
                                                <div class="sc_services_item sc_services_item_2 even">
                                                    <span class="sc_icon icon-location-1"></span>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">Skiverleih Ellmau</h4>
                                                        <div class="sc_services_item_description">
                                                            <p>Dorf 37,</p>
                                                            <p>6352 Ellmau,</p>
                                                            <p>Österreich</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="column-1_3 column_padding_bottom">
                                                <div class="sc_services_item sc_services_item_3 odd">
                                                    <span class="sc_icon icon-clock-1"></span>
                                                    <div class="sc_services_item_content">
                                                        <h4 class="sc_services_item_title">Unsere Öffnungszeiten</h4>
                                                        <div class="sc_services_item_description">
                                                            <p>Mo. &#8211; Fr.:</p>
                                                            <p> 08:30 &#8211; 12:00</p>
                                                            <p style="margin-bottom: 10px"> 14:00 &#8211; 18:00</p>
                                                            <p>Sa. &#8211; So.:</p>
                                                            <p> 08:30 &#8211; 18:00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Services-->
                                <!-- Google Map -->
                                <!-- <div class="google-map">
                                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10960.384024630619!2d13.6894179!3d46.6248654!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa248edcdebbf729e!2sMotiv-X!5e0!3m2!1sen!2sde!4v1572604746255!5m2!1sen!2sde" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div> -->
                                <!-- /Google Map -->
                            </section>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page content wrap -->

                <!-- logos slider -->
                <div class="container">
                    <div class="owl-carousel brands-logos">


                        @foreach($BrandWinter as $BrandWint)
                        <div>
                            <a href="#">
                                <img src="{{ asset('uploads/'.$BrandWint->img)}}" alt="burton">
                            </a>
                        </div>
@endforeach

                    </div>
                </div>
                <!-- /logos slider -->

                <!--Footer-->

                @include('site.layoutwinter.footer')

                <!-- /Footer-->

            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up-small" title="Scroll to top"></a>

        <script type="text/javascript" src="js/jquery/jquery.js"></script>

        <script type="text/javascript" src="js/_packed.js"></script>
        <script type="text/javascript" src="js/_main.js"></script>
        <script type="text/javascript" src="js/trx_utils.js"></script>

        <script type="text/javascript" src="js/vendor/essential-grid/js/lightbox.js"></script>
        <script type="text/javascript" src="js/vendor/essential-grid/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/vendor/essential-grid/js/jquery.themepunch.essential.min.js"></script>
        <script type="text/javascript" src="js/eg-index-page.js"></script>

        <script type="text/javascript" src="js/vendor/revslider/jquery.themepunch.revolution.min.js"></script>

        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/revslider-homepage-1.js"></script>

        <script type="text/javascript" src="js/vendor/woocommerce/js/woocommerce.min.js"></script>

        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/core.utils.js"></script>

        <script type="text/javascript" src="js/core.init.js"></script>
        <script type="text/javascript" src="js/tpl.init.js"></script>

        <script type="text/javascript" src="js/shortcodes.js"></script>

        <script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/core.messages/core.messages.js"></script>

        <script type="text/javascript" src="js/vendor/isotope/dist/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/vendor/swiper/swiper.min.js"></script>
        <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAA8O_i6YWSOXQn1vd9SSiIriIqewvBFWk"></script> -->
        <!-- <script type="text/javascript" src="js/core.googlemap.js"></script> -->
        <script src="js/owl.carousel.min.js"></script>
        <script>
            var $ = jQuery;
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    items: 6,
                    autoplay: true,
                    responsive : {
                        // breakpoint from 0 up
                        0 : {
                            items: 2,
                        },
                        // breakpoint from 480 up
                        480 : {
                            items: 3,
                        },
                        // breakpoint from 768 up
                        768 : {
                            items: 4,
                        },
                        991 : {
                            items: 5,
                        },
                        1200 : {
                            items: 6,
                        }
                    }
                });
            });
        </script>
    </body>

</html>
