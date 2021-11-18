@extends('frontend.components.app')
@section('content')
    <!-- ******************* Main Body Part ********************* -->

    <div class="wt-haslayout wt-proposal-single">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 push-lg-2 pb-5">

                    <!-- ------------------------------ -->
                    <div class="wt-proposalholder">
                        <div class=" ">
                            <h2>Apply List </h2>
                        </div>
                    </div>
                    <!-- ------------------------------ -->

                    <div class="table-responsive-sm">
                        <table class="table table-striped wt-proposalamount-holder wt-send-project-proposal">

                            <tbody>

                                <!-- ---------------------------- -->
                                @foreach ($data as $item)
                                    <tr style="padding:10px; vertical-align:middle">

                                        <td>
                                            <img src="{{isset($item->profile_image) ? asset('backend/uploads/freelancer/profile/'.$item->profile_image) : asset('backend/uploads/freelancer/profile/default.png')}}" alt="" style="width:85px">
                                            <p class="text-center text-warning mt-1" style="font-size:9px;color:red">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>

                                                5 Star
                                            </p>
                                        </td>
                                        <td style="vertical-align:middle">Graphics Designer,digital marketing</td>
                                        <td style="vertical-align:middle"> $37.00</td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href=""><span class="badge badge-danger p-1" title="status">Pending</span></a>
                                            </div>
                                        </td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href="javascript:;" class="btn btn-warning btn-sm"
                                                    title="freelancer profle view" data-id="0" data-post="156">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:;" class="btn btn-success btn-sm" data-id="0"
                                                    data-post="156" title="accept">
                                                    <i class="fas fa-check" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="btn btn-danger btn-sm" data-id="0"
                                                    data-post="156" title="cancel">
                                                    <i class="fas fa-times" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- ---------------------------- -->

                            </tbody>

                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>
    </main>
    <!-- ************** Main Part End********************* -->

    <!-- ************* Css Style Part **************-->
    <style>
        .fw-btn-1,
        .wt-btn {
            color: #fff;
            padding: 0 15px;
            background: #fff;
            position: relative;
            text-align: center;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
            text-transform: uppercase;
            font: 700 13px/50px 'Poppins', Arial, Helvetica, sans-serif;
        }

        /* ** */
        .wt-btn:hover,
        .wt-servicesgallery .wt-item-video figure,
        .infoBox .wt-mapcompanycontent .wt-viewjobholder ul li.wt-btnarea a,
        .wt-dropdowarrow,
        .navbar-toggle,
        .wt-btn,
        .wt-navigationarea .wt-navigation>ul>li>a:after,
        .wt-searchbtn,
        .wt-sectiontitle:after,
        .wt-navarticletab li a:after,
        .wt-pagination ul li a:hover,
        .wt-pagination ul li.wt-active a,
        .wt-widgettag a:hover,
        .tagcloud a:hover,
        .wt-articlesingle-content .wt-description blockquote span i,
        .wt-searchgbtn,
        .wt-filtertagclear a,
        .ui-slider-horizontal .ui-slider-range,
        .wt-btnsearch,
        .wt-newnoti a em,
        .wt-notificationicon>a:after,
        .wt-nav .navbar-toggler,
        .wt-usersidebaricon span,
        .wt-usersidebaricon span i,
        .wt-filtertag .wt-filtertagclear a,
        .wt-loader:before,
        .wt-offersmessages .wt-ad:after,
        .wt-btnsendmsg,
        .wt-tabstitle li a:before,
        .wt-tabscontenttitle:before,
        .wt-tablecategories thead tr th:first-child:before,
        .wt-tablecategories tbody tr td:first-child:before,
        .wt-slidernav .wt-prev:hover,
        .wt-slidernav .wt-next:hover,
        #confirmBox .button,
        .tg-qrcodedetails,
        .wt-userlistinghold .wt-widgettag a.showmore_skills,
        .woo-pagination span,
        .woo-pagination span:hover,
        .wt-featuredtagvtwo,
        .wt-reasonbtn,
        .woo-pagination a:hover,
        .wt-pagination ul li span.post-page-numbers,
        .woo-pagination span,
        #place_order,
        .woo-pagination span:hover,
        .woo-pagination a:hover,
        .woocommerce #respond input#submit,
        .wc-stripe-checkout-button,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce-MyAccount-content input[type=submit],
        .woocommerce-MyAccount-content .woocommerce-Button.button,
        .woocommerce ul.products li.product .button:hover,
        .woocommerce ul.products li.product .onsale,
        .woocommerce span.onsale,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce button.button.alt:hover,
        .woocommerce #review_form #respond .form-submit input:hover,
        .woo-pagination a:hover,
        .woo-pagination span.current,
        .woocommerce div.product .entry-summary form.cart .button,
        .has-strong-theme-color-background-color,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .widget_product_search button[type=submit],
        .fw-btn-1,
        .fw-btn-1:hover,
        .fw-tabs-container .fw-tabs ul li:before,
        .fw-package .fw-heading-row,
        .fw-package .fw-pricing-row,
        input[name="apply_for_vendor_submit"],
        .wcv-dashboard-navigation ul li a:after,
        table.table-vendor-sales-report thead tr th:first-child:before,
        table.table-vendor-sales-report tbody tr td:first-child:before,
        .wcv-dashboard-navigation~form p input[type="submit"].btn-small,
        #pv_shop_description_container~.btn-inverse,
        .wcvendors-pro-dashboard-wrapper .wcv-navigation ul.menu.black>li>a:after,
        .button.product,
        .wcvendors-pro-dashboard-wrapper .wcv-button.expand,
        table.wcvendors-table tbody tr td:first-child:before,
        #wcv-store-settings .wcv-tabs.top input[type="submit"],
        #wcv-store-settings .wcv-tabs.top>.tabs-nav li a:after,
        #wcv-product-edit .wcv-tabs.top input[type="submit"],
        #wcv-product-edit .wcv-tabs.top>.tabs-nav li a:after,
        .wcv-form .wcv_product_attributes .control-group .button,
        .wcv-form .wcv_product_attributes .control-group button,
        .wcv-form .wcv_product_attributes .control-group input[type="button"],
        #wcv_shipping_rates_table thead tr th:first-child:before,
        #wcv_shipping_rates_table tbody tr td:first-child:before,
        .wcv-search-form .control.append-button .wcv-button,
        .wcv-opening-hours-wrapper table thead tr th:first-child:before,
        .wcv-opening-hours-wrapper table tbody tr td:first-child:before,
        .wcvendors-table-product thead tr th:first-child:before,
        .download_file_table thead tr th:first-child:before,
        .download_file_table tbody tr td:first-child:before,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a:after,
        #wcv-shop_coupon-edit.wcv-form input[type="submit"],
        #wcv-shop_coupon-edit.wcv-form .wcv-tabs .tabs-nav li a:after,
        .wcv-grid .wcv_recent_orders .wcv-button,
        .resume-item-download {
            background: #c8356c;
        }

        /* ** */

    </style>
    <!-- ************* Css Style Part  End *************-->
@endsection
