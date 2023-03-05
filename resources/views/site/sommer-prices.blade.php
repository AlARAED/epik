<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

@include('site.layoutwinter.head')

    <body class="page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <!-- Body wrap -->
            <div class="body_wrap">
                <!-- Page wrap -->
                <div class="page_wrap">
                    <div class="top_panel_fixed_wrap"></div>
                    <!-- Header -->
                    <header class="top_panel_wrap top_panel_style_7">
                        <div class="top_panel_wrap_inner top_panel_inner_style_7 top_panel_position_above">
                            <div class="top_panel_middle">
                                <div class="content_wrap">
                                    <!-- Contact logo -->
                                    <div class="column-1_3 contact_logo">
                                        <div class="logo">
                                            <a href="/">
                                                <img src="images/logo_light.png" class="logo_main" alt="">
                                                <!-- <img src="http://placehold.it/292x99" class="logo_fixed" alt=""> -->
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /Contact logo -->
                                    <!-- Main menu -->
                                    <div class="column-2_3 menu_main_wrap">
                                        <nav class="menu_main_nav_area menu_hover_slide_line">
                                            <ul id="menu_main" class="menu_main_nav">
                                                <!-- Menu: Home -->
                                                <li class="menu-item ">
                                                    <a href="/"><span>Home</span></a>
                                                </li>
                                                <!-- /Menu: Home -->

                                                <!-- Menu: Classes -->
                                                <li class="menu-item">
                                                    <a href="winter"><span>Winter</span></a>
                                                </li>
                                                <!-- /Menu: Classes -->
                                                <!-- Menu: Rent -->
                                                <li class="menu-item current-menu-ancestor">
                                                    <a href="sommer-prices"><span>Prices</span></a>
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
                                        <li class="menu-item ">
                                            <a href="#"><span>Home</span></a>
                                        </li>
                                        <!-- /Menu: Home -->
                                        <!-- Menu: Sommer -->
                                        <li class="menu-item current-menu-ancestor">
                                            <a href="sommer.html"><span>Sommer</span></a>
                                        </li>
                                        <!-- /Menu: Sommer -->
                                        <!-- Menu: Rent -->
                                        <li class="menu-item current-menu-ancestor">
                                            <a href="sommer-prices.html"><span>Prices</span></a>
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
                    <!-- Top panel -->
                    <section class="top_panel_image">
                        <div class="top_panel_image_hover"></div>
                        <div class="content_wrap">
                            <div class="top_panel_image_header">
                                <h1 class="top_panel_image_title">Prices | sommer</h1>
                                <div class="breadcrumbs">
                                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                                    <span class="breadcrumbs_delimiter"></span>
                                    <span class="breadcrumbs_item current">Prices | sommer</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Top panel -->
                    <!-- Page content wrap -->
                    <div class="container">
                        <!--page title-->
                        <div class="sc_section margin_top_6em margin_bottom_5_5em title-page-prices">
                            <div class="sc_section_inner">
                                <div class="sc_section_content_wrap">
                                    <div class="sc_skills sc_skills_counter margin_top_tiny" data-type="counter" data-caption="Skills">
                                        <h2 class="sc_skills_title sc_item_title sc_item_title_with_descr">This is title page</h2>
                                        <div class="sc_skills_descr sc_item_descr">
                                            this is description for this page this is description for this page
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/page title-->
                        <div class="page_content_wrap page_paddings_no sommer-prices-page" style="margin: 80px 0;">
                            <!-- Content -->
                            @foreach ($MainCategoryProductSomer as $MainCategoryProdu)


                            <div class="content">
                                <h3><span class="main-clr">{{ $MainCategoryProdu->title }}</span> </h3>
                                <div class="table-wrap">
                                        <a class="image-link-1 absolute eye-icon" href="{{ asset('uploads/'.$MainCategoryProdu->img) }}">
                                        <svg style="color: rgb(255, 255, 255);" xmlns="{{ asset('uploads/'.$MainCategoryProdu->img) }}" width="26" height="26" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" fill="#ffffff"></path> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" fill="#ffffff"></path> </svg>
                                    </a>
                                    <table>
                                        <thead>



                                            <tr>
                                                <th>Kategorie</th>
                                                <th>Tage</th>
                                            </tr>
                                        </thead>
                                        <tbody>

@php         $subcategories=DB::table('sub_category_product_somers')->where('main_category_id',$MainCategoryProdu->id)->get();@endphp

                                            @foreach ($subcategories as $subcategor )
                                            <tr>
                                                <td>{{ $subcategor->category_name }}</td>
                                                <td>{{ $subcategor->text }}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           @endforeach
                            <!-- /Content -->
                        </div>
                        <div>
                            <p>{!!html_entity_decode($setting->texthomesite )!!}</p>
                        </div>
                    </div>
                    <!-- /Page content wrap -->
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

        <script type="text/javascript" src="js/vendor/woocommerce/js/woocommerce.min.js"></script>

        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/core.utils.js"></script>

        <script type="text/javascript" src="js/core.init.js"></script>
        <script type="text/javascript" src="js/tpl.init.js"></script>

        <script type="text/javascript" src="js/shortcodes.js"></script>

        <script type="text/javascript" src="js/vendor/swiper/swiper.min.js"></script>
        <script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/core.messages/core.messages.js"></script>
        <script>
            $(document).ready(function() {
                $('.image-link').magnificPopup({type:'image'});
            });
        </script>

    </body>

</html>
