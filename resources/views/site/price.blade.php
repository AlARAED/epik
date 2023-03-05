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
                    @include('site.layoutwinter.top-panel')



                    <!-- /Header mobile -->
                    <!-- Top panel -->
                    <section class="top_panel_image">
                        <div class="top_panel_image_hover"></div>
                        <div class="content_wrap">
                            <div class="top_panel_image_header">
                                <h1 class="top_panel_image_title">Prices</h1>
                                <div class="breadcrumbs">
                                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                                    <span class="breadcrumbs_delimiter"></span>
                                    <span class="breadcrumbs_item current">Prices</span>
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
                        <div class="page_content_wrap page_paddings_no" style="margin: 80px 0;">
                            <!-- Content -->
                            <div class="content">
                                <div class="table-wrap">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Tage</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>6/7</th>
                                                <th>je weit Tag</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($prices as $price )


                                            <tr>
                    <td>{{ $price->title }}</td>
                    <td>{{ $price->first_day }}€</td>
                    <td>{{ $price->second_day }}€</td>
                    <td>{{ $price->thirs_day }}€</td>
                    <td>{{ $price->fourth_day }}€</td>
                    <td>{{ $price->fifth_day }}€</td>
                    <td>{{ $price->sixth_siventh_day }}€</td>
                    <td>{{ $price->inventy_day }}€</td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!-- /Content -->
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

    </body>

</html>
