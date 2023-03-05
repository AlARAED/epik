<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>
        <title>{{ $setting->title }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" href="js/vendor/essential-grid/css/settings.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/tpl-essential-grids.css" type="text/css" media="all" />

        <link rel="stylesheet" href="js/vendor/revslider/css/settings.css" type="text/css" media="all" />

        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-layout.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" href="js/vendor/woocommerce/css/woocommerce.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/wp-cloudy/css/wpcloudy.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/wp-cloudy/css/wpcloudy-anim.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,300i,400,400i,500,600,700,700i">
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

        <link rel="icon" href="http://placehold.it/32x32" sizes="32x32" />
        <link rel="icon" href="http://placehold.it/32x32" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/32x32" />
    </head>

    <body class="home page body_filled article_style_stretch scheme_original top_panel_show top_panel_over sidebar_hide">
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
                                        <a href="index.html">



                                            <img src="{{ asset('uploads/'.$setting->logo_winter)}}" class="logo_main" alt="logo">
                                            <img src="{{ asset('uploads/'.$setting->logo_winter)}}" class="logo_fixed" alt="">
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
                                                <a href="/winter"><span>Home</span></a>
                                            </li>
                                            <!-- /Menu: Home -->

                                            <!-- Menu: Classes -->
                                            <li class="menu-item">
                                                <a href="sommer"><span>Sommer</span></a>
                                            </li>
                                            <!-- /Menu: Classes -->
                                            <!-- Menu: Rent -->
                                            <li class="menu-item">
                                                <a href="price" target="_blank"><span>Prices</span></a>
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
                                        <a href="price" target="_blank"><span>Prices</span></a>
                                    </li>
                                    <!-- /Menu: Rent -->
                                    <li class="menu-item">
                                        <a href="contact-us.html"><span>Contact Us</span></a>
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
                <!-- Page content wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item post_item_single page">
                            <section class="post_content">
                                <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper relative fullscreen-container" data-source="gallery" style="">
                                    <!-- START REVOLUTION SLIDER 5.3.1.5 fullscreen mode -->
                                    <div id="rev_slider_3_1" class="rev_slider fullscreenbanner" data-version="5.3.1.5">
                                        <ul>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                <!-- MAIN IMAGE -->
                                                <!-- <img src="images/slider-3/slider_3_slide_1.jpg" alt="" title="slider_3_slide_1" width="1920" height="980" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> -->
                                                <!-- LAYERS -->
                                                <!-- LAYER NR. 1 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-9-layer-3" data-x="right" data-hoffset="-9" data-y="28" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":400,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider-3/slider_3_slide_1_boarder.webp" alt="" data-ww="934px" data-hh="837px" width="934" height="837" data-no-retina>
                                                </div> -->
                                                <!-- LAYER NR. 2 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-9-layer-6" data-x="right" data-hoffset="875" data-y="179" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":650,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_1_2.png" alt="" data-ww="915px" data-hh="805px" width="915" height="805" data-no-retina>
                                                </div> -->
                                                <!-- LAYER NR. 3 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-9-layer-7" data-x="right" data-hoffset="700" data-y="324" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":830,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_1_3.png" alt="" data-ww="1178px" data-hh="858px" width="1178" height="858" data-no-retina>
                                                </div> -->
                                                <div class="slid-text-wrap">
                                                    <!-- LAYER NR. 4 -->
                                                    <div class="tp-caption slider_3_text_80 tp-resizeme rs-parallaxlevel-1" id="slide-9-layer-8" data-x="center" data-hoffset="-182" data-y="398" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Skiverleih Ellmau </div>
                                                    <!-- LAYER NR. 5 -->
                                                    <div class="tp-caption slider_3_slide_text_100 tp-resizeme rs-parallaxlevel-1" id="slide-9-layer-9" data-x="center" data-hoffset="-292" data-y="485" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1160,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Ihr Fachgeschäft für Sport </div>
                                                    <!-- LAYER NR. 6 -->
                                                    <div class="tp-caption slider_3_text_70 tp-resizeme rs-parallaxlevel-1" id="slide-9-layer-10" data-x="center" data-hoffset="-302" data-y="602" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1370,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">und Freizeitartikel </div>
                                                    <!-- LAYER NR. 7 -->
                                                </div>
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-9-layer-5" data-x="right" data-hoffset="23" data-y="220" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":500,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_1_1.png" alt="" data-ww="1892px" data-hh="841px" width="1892" height="841" data-no-retina>
                                                </div> -->
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                <!-- MAIN IMAGE -->
                                                <!-- <img src="images/slider-3/slider_3_slide_2.jpg" alt="" title="slider_3_slide_2" width="1920" height="1080" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> -->
                                                <!-- LAYERS -->
                                                <!-- LAYER NR. 8 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-10-layer-1" data-x="right" data-hoffset="" data-y="66" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":90,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider-3/slider_3_slide_2_boarder.webp" alt="" data-ww="1847px" data-hh="951px" width="1847" height="951" data-no-retina>
                                                </div> -->
                                                <!-- LAYER NR. 9 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-10-layer-7" data-x="right" data-hoffset="944" data-y="109" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":300,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_2_2.png" alt="" data-ww="915px" data-hh="805px" width="915" height="805" data-no-retina>
                                                </div> -->
                                                <!-- LAYER NR. 10 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-10-layer-8" data-x="right" data-hoffset="750" data-y="258" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":400,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_2_3.png" alt="" data-ww="1178px" data-hh="858px" width="1178" height="858" data-no-retina>
                                                </div> -->
                                                <div class="slid-text-wrap">
                                                    <!-- LAYER NR. 11 -->
                                                    <div class="tp-caption slider_3_text_80 tp-resizeme rs-parallaxlevel-1" id="slide-10-layer-2" data-x="center" data-hoffset="-355" data-y="350" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":550,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Skiverleih Ellmau </div>
                                                    <!-- LAYER NR. 12 -->
                                                    <div class="tp-caption slider_3_slide_text_100 tp-resizeme rs-parallaxlevel-1" id="slide-10-layer-3" data-x="center" data-hoffset="-341" data-y="439" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":690,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Ihr Fachgeschäft für Sport </div>
                                                    <!-- LAYER NR. 13 -->
                                                    <div class="tp-caption slider_3_text_70 tp-resizeme rs-parallaxlevel-1" id="slide-10-layer-4" data-x="center" data-hoffset="-338" data-y="570" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":810,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">und Freizeitartikel </div>
                                                </div>
                                                <!-- LAYER NR. 14 -->
                                                <!-- <div class="tp-caption   tp-resizeme" id="slide-10-layer-6" data-x="right" data-hoffset="33" data-y="177" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":200,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_2_1.png" alt="" data-ww="1891px" data-hh="803px" width="1891" height="803" data-no-retina>
                                                </div> -->
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                <!-- MAIN IMAGE -->
                                                <!-- <img src="images/slider-3/slider_3_slide_3.jpg" alt="" title="slider_3_slide_3" width="1920" height="980" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> -->
                                                <!-- LAYERS -->
                                                <!-- LAYER NR. 15 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-8-layer-1" data-x="right" data-hoffset="3" data-y="162" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":200,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider-3/slider_3_slide_3_boarder.webp" alt="" data-ww="1085px" data-hh="832px" width="1085" height="832" data-no-retina>
                                                </div> -->
                                                <!-- LAYER NR. 16 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-8-layer-6" data-x="68" data-y="79" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":500,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_3_2.png" alt="" data-ww="915px" data-hh="805px" width="915" height="805" data-no-retina>
                                                </div> -->
                                                <!-- LAYER NR. 17 -->
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-8-layer-7" data-x="-2" data-y="223" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":600,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_3_3.png" alt="" data-ww="1178px" data-hh="858px" width="1178" height="858" data-no-retina>
                                                </div> -->
                                                <div class="slid-text-wrap">
                                                    <!-- LAYER NR. 18 -->
                                                    <div class="tp-caption slider_3_text_80 tp-resizeme rs-parallaxlevel-1" id="slide-8-layer-2" data-x="310" data-y="264" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":890,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Skiverleih Ellmau </div>
                                                    <!-- LAYER NR. 19 -->
                                                    <div class="tp-caption slider_3_slide_text_100 tp-resizeme rs-parallaxlevel-1" id="slide-8-layer-3" data-x="361" data-y="359" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1160,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Ihr Fachgeschäft für Sport </div>
                                                    <!-- LAYER NR. 20 -->
                                                    <div class="tp-caption slider_3_text_70 tp-resizeme rs-parallaxlevel-1" id="slide-8-layer-4" data-x="264" data-y="481" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1440,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">und Freizeitartikel </div>
                                                    <!-- LAYER NR. 21 -->
                                                </div>
                                                <!-- <div class="tp-caption tp-resizeme" id="slide-8-layer-5" data-x="6" data-y="146" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on" data-frames='[{"delay":400,"speed":300,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="images/slider_3_slide_3_1.png" alt="" data-ww="1891px" data-hh="803px" width="1891" height="803" data-no-retina>
                                                </div> -->
                                            </li>
                                        </ul>
                                        <div class="tp-bannertimer tp-bottom"></div>
                                    </div>
                                    <video autoplay muted loop id="myVideo">
                                        <source src="videos/1084147672-preview.mp4" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>

                                <!-- END REVOLUTION SLIDER -->
                                <!-- Snowboard Schools -->
                                <div class="hp_schools_section">
                                    <div class="content_wrap">
                                        <div class="custom_title_1 text_align_center">SKIPARADIES</div>
                                        <div class="sc_services_wrap">
                                            <div class="sc_services sc_services_style_services-3 sc_services_type_icons title_center width_100_per">
                                                <h2 class="sc_services_title sc_item_title sc_item_title_with_descr">HERZLICH WILLKOMMEN IM SKIGEBIET ELLMAU</h2>
                                                <div class="sc_services_descr sc_item_descr">
                                                	Leben ist Bewegung: mit der richtigen Sportbekleidung, einer guten Ausrüstung und modischen Accessoires. <br>
                                                	Unser umfangreiches Sortiment umfasst die gängigsten Sportarten. Ob Einsteiger, Freizeitsportler oder ambitionierter Leistungssportler: Wir beraten Sie gerne mit den neuesten Tipps und Trends. Und das alles ganz unverbindlich - einfach anprobieren, ausprobieren und anschließend gleich mit nach Hause nehmen.
                                                	<br>
                                                	Bringen Sie noch heute mehr Bewegung in Ihr Leben!
                                            	</div>
                                                <div class="sc_columns columns_wrap">
                                                    <div class="column-1_3 column_padding_bottom">
                                                        <div class="sc_services_item sc_services_item_1 odd first">
                                                            <div class="sc_services_item_featured post_featured">
                                                                <div class="post_thumb" data-image="" data-title="Private Lessons for Beginners">
                                                                    <div>
                                                                        <img alt="service_image_4.png" src="images/ser1.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_subtitle">New to Snowboarding?</h4>
                                                                <h4 class="sc_services_item_title">
                                                                    Private Lessons for Beginners
                                                                </h4>

                                                            </div>
                                                        </div>
                                                    </div><div class="column-1_3 column_padding_bottom">
                                                        <div class="sc_services_item sc_services_item_2 even">
                                                            <div class="sc_services_item_featured post_featured">
                                                                <div class="post_thumb" data-image="" data-title="Group Lessons for Beginners">
                                                                    <div>
                                                                        <img alt="service_image_5.png" src="images/ser2.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_subtitle">Need a Crew?</h4>
                                                                <h4 class="sc_services_item_title">
                                                                    Group Lessons for Beginners
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div><div class="column-1_3 column_padding_bottom">
                                                        <div class="sc_services_item sc_services_item_3 odd">
                                                            <div class="sc_services_item_featured post_featured">
                                                                <div class="post_thumb" data-image="" data-title="Advanced Group Lessons">
                                                                    <div>
                                                                        <img alt="service_image_6.png" src="images/ser3.png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_subtitle">Wanna More?</h4>
                                                                <h4 class="sc_services_item_title">
                                                                    Advanced Group Lessons
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sc_services_item_description pdf-file-btn">
                                                    <a href="price" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">Ski Verleih Preise</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Snowboard Schools -->
                                <!--Adv section-->
                                <div class="adv-section">
                                    <div class="content_wrap">
                                        <div class="flex gap-20">


                                            <div class="w-50">
                                                <img style=" width:550px  ; height:200px; max-width: 100%;" src="{{ asset('uploads/'.$ads->img1)}}" alt="adv image"
                                          >
                                            </div>
                                            <div class="w-50">
                                                <img style="max-width: 100%;" src="{{ asset('uploads/'.$ads->img2)}}" alt="adv image">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Adv section-->


                                <!-- Online Booking -->
                                <div class="hp_booking_section">
                                    <div class="content_wrap">
                                        <div class="sc_columns columns_wrap">
                                            <div class="column-1_2">
                                                <div class="custom_title_1 text_align_left">WHAT WE OFFER</div>
                                                <div class="sc_section">
                                                    <div class="sc_section_inner">
                                                        <h2 class="sc_section_title sc_item_title sc_item_title_with_descr">Online Reservierung</h2>
                                                        <div class="sc_section_descr sc_item_descr">Bei ONLINE – Reservierung erhalten Sie 10% Nachlass auf Ihre Skiausrüstung!</div>
                                                        <div class="sc_section_content_wrap">
                                                            <a href="{{$setting->booking_link  }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small margin_top_tiny">booking</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Online Booking -->
                                <!-- The Essential Grid -->
                                <article class="myportfolio-container custom-1" id="esg-grid-1-1-wrap">
                                    <div id="esg-grid-1-1" class="esg-grid">
                                        <ul>
                                            <!-- Grid item -->
                                            <li class="eg-custom-skin-1-wrapper" data-cobblesw="1" data-cobblesh="1">
                                                <div class="esg-media-cover-wrapper">
                                                    <div class="esg-entry-media">

                                                        @php   $gallery =DB::table('galleries')->where([
                                                            ['id', '=', '5'],
                                                            ['type', '=', '1']])->first();
                                                            @endphp


                                                        <img src="{{ asset('uploads/'. $gallery->img)}}" alt="">                                                   </div>
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
                                                            ['id', '=', '3'],
                                                            ['type', '=', '1']])->first();@endphp
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
                                                            ['id', '=', '1'],
                                                            ['type', '=', '1']])->first();@endphp
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
                                                            ['id', '=', '11'],
                                                            ['type', '=', '1']])->first();@endphp

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
                                                            ['id', '=', '9'],
                                                            ['type', '=', '1']])->first();@endphp
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
                                                            ['id', '=', '7'],
                                                            ['type', '=', '1']])->first();@endphp
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
                                <!-- School Info -->
                                <div class="hp_school_info" style="margin-top:6em">
                                    <div class="content_wrap">
                                        <div class="sc_columns columns_wrap">
                                            <div class="column-9_12">
                                                <div class="custom_title_1 text_align_left" style="color: #333">SKIPARADIES</div>
                                                <div class="sc_section">
                                                    <div class="sc_section_inner">
                                                        <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Herzlich Willkommen im Skigebiet  Ellmau</h2>
                                                    </div>
                                                </div>
                                                <div class="sc_section margin_top_small-">
                                                    <div class="sc_section_inner">
                                                        <div class="sc_section_descr sc_item_descr">Wir bieten Ihnen für Ihre Freizeitgestaltung und für sprotliche Aktivitäten qualitativ hochwertige und attraktive Produkte, mit denen Sie In- und Outdoor schöne Stunden verbringen können. In unserem Fachgeschäft berät Sie unser kompetentes Team gerne und hilft Ihnen das Passende für Ihre Ansprüche zu finden.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /School Info -->

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
                                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d43112.83169343223!2d12.2667454!3d47.5181157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4776496bc004229f%3A0xc18bb04e77995203!2sSkiparadies%20Top%20Skiverleih%20Ellmau%20-20%25%20bei%20Onlinebuchung!5e0!3m2!1sen!2s!4v1676241390039!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
                        @foreach ($BrandWinter  as  $BrandWint)

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
        <script type="text/javascript" src="js/revslider-index-page.js"></script>

        <script type="text/javascript" src="js/vendor/woocommerce/js/woocommerce.min.js"></script>

        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/core.utils.js"></script>

        <script type="text/javascript" src="js/core.init.js"></script>
        <script type="text/javascript" src="js/tpl.init.js"></script>

        <script type="text/javascript" src="js/shortcodes.js"></script>

        <script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/core.messages/core.messages.js"></script>

        <script type="text/javascript" src="js/vendor/skrollr/dist/skrollr.min.js"></script>
        <script type="text/javascript" src="js/vendor/isotope/dist/isotope.pkgd.min.js"></script>
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
