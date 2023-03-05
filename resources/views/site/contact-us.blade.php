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
                <section class="top_panel_image">
                    <div class="top_panel_image_hover"></div>
                    <div class="content_wrap">
                        <div class="top_panel_image_header">
                            <h1 class="top_panel_image_title">Contact Us</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="index.html">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Contact Us</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- /Top panel -->

                <!-- Page content wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item post_item_single page">
                            <section class="post_content">
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
                                <!-- Contact form -->



                                <div class="content_wrap">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_6">
                                        <div class="column-1_6 sc_column_item sc_column_item_1 odd first"></div>
                                        <div class="column-4_6 sc_column_item sc_column_item_2 even span_4">
                                            <div id="sc_form_2_wrap" class="sc_form_wrap">
                                                <div id="sc_form_2" class="sc_form sc_form_style_form_1 margin_top_small margin_bottom_large">

                                                    @if(!empty($successMsg))
                                                    <div class="alert alert-success">
                                                        <strong>Success!</strong> {{ $successMsg }}
                                                      </div>
                                                      @endif

                                                    <form  method="post" action="{{ route('save_Contact_us') }}">
                                                        @csrf
                                                       <div class="sc_form_info">
                                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                                <div class="sc_form_item sc_form_field label_over column-1_2">
                                                                    <input id="sc_form_username" type="text" name="name" placeholder="YOUR NAME" aria-required="true">
                                                                </div><div class="sc_form_item sc_form_field label_over column-1_2">
                                                                    <input id="sc_form_email" type="text" name="email" placeholder="YOUR EMAIL" aria-required="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sc_form_item sc_form_message">
                                                            <textarea id="sc_form_message" name="text" placeholder="YOUR MESSAGE" aria-required="true"></textarea>
                                                        </div>
                                                        <div class="sc_form_item sc_form_button">
                                                            <input
                                                             type="submit"
                                                            value="submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Contact form -->
                                <!-- Google Map -->
                                <!-- <div id="sc_googlemap_196270504" class="sc_googlemap width_100_per height_500" data-zoom="14" data-style="dark">
                                    <div id="sc_googlemap_196270504_1" class="sc_googlemap_marker" data-title="" data-description="6486 Sycamore Lane Fort Lee" data-address="6486 Sycamore Lane Fort Lee" data-latlng="" data-point="images/map-marker.png"></div>
                                </div> -->
                                <!-- /Google Map -->
                            </section>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page content wrap -->
                <!--Footer-->
                @include('site.layoutwinter.footer')

                <!-- /Footer-->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
                var type="{{Session::get('alert-type','info')}}"

                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                     case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>
        <a href="#" class="scroll_to_top icon-up-small" title="Scroll to top"></a>

        <script type="text/javascript" src="js/jquery/jquery.js"></script>


        <script type="text/javascript" src="js/vendor/woocommerce/js/woocommerce.min.js"></script>

        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/core.utils.js"></script>

        <script type="text/javascript" src="js/core.init.js"></script>
        <script type="text/javascript" src="js/tpl.init.js"></script>

        <script type="text/javascript" src="js/shortcodes.js"></script>

        <script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/core.messages/core.messages.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAA8O_i6YWSOXQn1vd9SSiIriIqewvBFWk"></script>
        <script type="text/javascript" src="js/core.googlemap.js"></script>

    </body>

</html>
