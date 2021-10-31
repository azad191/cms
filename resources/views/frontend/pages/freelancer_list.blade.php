@extends('frontend.components.app')
@section('subBanner')
    <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url('{{url('frontend/wp-content/uploads/2019/04/tb-1.jpg')}}');">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h1>Search Freelancers</h1>
                        </div>
                        <ol class="wt-breadcrumb">
                            <li class="first-item">
                                <a href="../index.html">Home</a>
                            </li>
                            <li class="last-item">Search Freelancers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div id="wt-demo-sidebar" class="wt-demo-sidebar">

        <div id="wt-verticalscrollbar-demos" class="wt-verticalscrollbar">
            <div class="wt-demo-holder">
                <a target="_blank" href="../index.html">
                    <figure class="wt-demo-img">
                        <img src="../wp-content/themes/workreap/images/demo-img/img-01.jpg" alt="demos">
                        <figcaption>
                            <div class="wt-demo-tags">
                                <span class="wt-demo-new">New</span>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a target="_blank" href="http://amentotech.com/projects/elementor">
                    <figure class="wt-demo-img">
                        <img src="../wp-content/themes/workreap/images/demo-img/img-02.jpg" alt="demos">
                        <figcaption>
                            <div class="wt-demo-tags">
                                <span class="wt-demo-new">Elementor Page Builder</span>
                                <span class="wt-demo-populor">Popular</span>
                            </div>
                        </figcaption>
                    </figure>
                </a>
                <a href="http://amentotech.com/projects/elementor/home-page-three/">
                    <figure class="wt-demo-img">
                        <img src="../wp-content/themes/workreap/images/demo-img/img-03.jpg" alt="demos">
                        <figcaption>
                            <div class="wt-demo-tags">
                                <span class="wt-demo-populor">New Design</span>
                            </div>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="wt-demo-content">
            <div class="wt-demo-heading">
                <h4>Outstanding Demos</h4>
                <p>With easy<em> ONE CLICK INSTALL</em> and fully customizable options, our demos are the best start you&#039;ll ever get!!</p>
                <div class="wt-demo-btns">
                    <a target="_blank" href="https://themeforest.net/item/workreap-freelance-marketplace-wordpress-theme/23712454?s_rank=3" class="wt-demo-btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="search-result-template wt-haslayout">
        <div class="wt-haslayout wt-job-search">
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            <aside id="wt-sidebar" class="wt-sidebar">
                                <div class="mmobile-floating-apply">
                                    <span>Apply Filters</span>
                                    <i class="fa fa-filter"></i>
                                </div>
                                <div class="floating-mobile-filter">
                                    <div class="wt-filter-scroll">
                                        <a class="wt-mobile-close" href="javascript:;"><i class="lnr lnr-cross"></i></a>
                                        <form method="post"  name="serach-projects" action="{{route('freelancer.filter')}}">
                                            @csrf
                                            <!-- <div class="wt-widget wt-startsearch ">
                                               <div class="wt-widgettitle">
                                                  <h2>Search By Geo Location</h2>
                                               </div>
                                               <div class="wt-widgetcontent">
                                                  <div class="wt-formtheme wt-formsearch">
                                                     <fieldset>
                                                        <div class="locate-me-wrap">
                                                           <div id="location-pickr-map" class="elm-display-none"></div>
                                                           <input type="text"  autocomplete="on" id="location-address" value="" name="geo" placeholder="Geo location" class="form-control">
                                                           <a href="javascript:;" class="geolocate"><i class="fa fa-crosshairs geolocate"></i></a>
                                                           <a href="javascript:;" class="geodistance"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                           <div class="geodistance_range elm-display-none">
                                                              <div class="distance-ml distance-ml-7399">Distance in&nbsp;( Miles )&nbsp;<span>50</span></div>
                                                              <input type="hidden" class="geo_distance geo_distance-7399" name="geo_distance" value="50" />
                                                              <div class="geo_distance geo_distance-7399" id="geo_distance_7399"></div>
                                                           </div>
                                                           <input type="hidden" id="location-latitude" name="lat" value="" />
                                                           <input type="hidden" id="location-longitude" name="long" value="" />
                                                        </div>
                                                     </fieldset>
                                                  </div>
                                               </div>
                                            </div> -->

                                            <h2 class="filter-byhead">Filter Freelancers By</h2>
                                            <div class="wt-widget wt-startsearch ">
                                                <div class="wt-widgettitle">
                                                    <h2>Start Your Search</h2>
                                                    <a href="javascript:;" class="dc-docsearch"><span class="dc-advanceicon"><i></i> <i></i> <i></i></span><span>Advanced <br>Search</span></a>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <input type="text" name="keyword" value="" class="form-control" placeholder="Type keyword">
                                                                <button class="wt-searchgbtn" type="submit"><i class="fa fa-filter"></i></button>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                    <h2>Freelancer Type</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll">
                                                            <span class="wt-checkbox">
                                                            <input id="freelancerindependent" type="checkbox" name="freelancer_type[]" value="independent" >
                                                            <label for="freelancerindependent">Independent Freelancers</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="freelanceragency" type="checkbox" name="type[]" value="agency" >
                                                            <label for="freelanceragency">Agency Freelancers</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="freelancerrising_talent" type="checkbox" name="type[]" value="rising_talent" >
                                                            <label for="freelancerrising_talent">New Rising Talent</label>
                                                            </span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                    <h2>Hourly Rate</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll">
                                                            <span class="wt-radio">
                                                            <input id="hour0-5"  type="radio" name="hourly_rate" value="0-5">
                                                            <label for="hour0-5">&#036;5 And Below</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour5-10"  type="radio" name="hourly_rate" value="5-10">
                                                            <label for="hour5-10">&#036;5 - &#036;10</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour10-20"  type="radio" name="hourly_rate" value="10-20">
                                                            <label for="hour10-20">&#036;10 - &#036;20</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour20-30"  type="radio" name="hourly_rate" value="20-30">
                                                            <label for="hour20-30">&#036;20 - &#036;30</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour30-40"  type="radio" name="hourly_rate" value="30-40">
                                                            <label for="hour30-40">&#036;30 - &#036;40</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour40-50"  type="radio" name="hourly_rate" value="40-50">
                                                            <label for="hour40-50">&#036;40 - &#036;50</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour50-60"  type="radio" name="hourly_rate" value="50-60">
                                                            <label for="hour50-60">&#036;50 - &#036;60</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour60-70"  type="radio" name="hourly_rate" value="60-70">
                                                            <label for="hour60-70">&#036;60 - &#036;70</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour70-80"  type="radio" name="hourly_rate" value="70-80">
                                                            <label for="hour70-80">&#036;70 - &#036;80</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour80-90"  type="radio" name="hourly_rate" value="80-90">
                                                            <label for="hour80-90">&#036;80 - &#036;90</label>
                                                            </span>
                                                                <span class="wt-radio">
                                                            <input id="hour90-0"  type="radio" name="hourly_rate" value="90-0">
                                                            <label for="hour90-0">&#036;100 And Above</label>
                                                            </span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wt-widget wt-effectiveholder  wt-displayfilter">
                                                <div class="wt-widgettitle">
                                                    <h2>Industrial experiences:</span></h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control wt-filter-field" placeholder="Industrial experiences">
                                                                <a href="javascript:;" class="wt-searchgbtn"><i class="fa fa-search"></i></a>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll mCustomScrollbar _mCS_4"><div id="mCSB_4" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 150px;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                                        <span class="wt-checkbox loclevel-0"><input name="industrial_experience[]" type="checkbox" id="term-823679650" data-permalink="https://amentotech.com/projects/wpworkreap/wt-industrial-experience/aerospace-defense/" class="loclevel-0" value="aerospace-defense"><label for="term-823679650">Aerospace/Defense</label></span>
                                                                        <span class="wt-checkbox loclevel-0"><input name="industrial_experience[]" type="checkbox" id="term-829876245" data-permalink="https://amentotech.com/projects/wpworkreap/wt-industrial-experience/automotive/" class="loclevel-0" value="automotive"><label for="term-829876245">Automotive</label></span>
                                                                        <span class="wt-checkbox loclevel-0"><input name="industrial_experience[]" type="checkbox" id="term-2077738710" data-permalink="https://amentotech.com/projects/wpworkreap/wt-industrial-experience/banking/" class="loclevel-0" value="banking"><label for="term-2077738710">Banking</label></span>
                                                                        <span class="wt-checkbox loclevel-0"><input name="industrial_experience[]" type="checkbox" id="term-1187827463" data-permalink="https://amentotech.com/projects/wpworkreap/wt-industrial-experience/biotechnology/" class="loclevel-0" value="biotechnology"><label for="term-1187827463">Biotechnology</label></span>
                                                                        <span class="wt-checkbox loclevel-0"><input name="industrial_experience[]" type="checkbox" id="term-993001302" data-permalink="https://amentotech.com/projects/wpworkreap/wt-industrial-experience/computer-hardware/" class="loclevel-0" value="computer-hardware"><label for="term-993001302">Computer Hardware</label></span>
                                                                        <span class="wt-checkbox loclevel-0"><input name="industrial_experience[]" type="checkbox" id="term-1110375909" data-permalink="https://amentotech.com/projects/wpworkreap/wt-industrial-experience/computer-software-services/" class="loclevel-0" value="computer-software-services"><label for="term-1110375909">Computer Software &amp; Services</label></span>
                                                                    </div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px; display: block; height: 110px; max-height: 140px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>






                                            <!-- <div class="wt-widget wt-effectiveholder">
                                               <div class="wt-widgettitle">
                                                  <h2>Categories</h2>
                                               </div>
                                               <div class="wt-widgetcontent">
                                                  <div class="wt-formtheme wt-formsearch">
                                                     <fieldset>
                                                        <div class="form-group">
                                                           <input type="text" value="" class="form-control wt-filter-field" placeholder="Search Category">
                                                           <a href="javascript:;" class="wt-searchgbtn"><i class="fa fa-filter"></i></a>
                                                        </div>
                                                     </fieldset>
                                                     <fieldset>
                                                        <div class="wt-checkboxholder wt-filterscroll">
                                                           <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-577706245 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/business/" class="loclevel-0" value="business"><label for="term-577706245">Business</label></span>
                                                           <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-1383038269 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/digital-marketing/" class="loclevel-0" value="digital-marketing"><label for="term-1383038269">Digital Marketing</label></span>
                                                           <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-232126349 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/fun-lifestyle/" class="loclevel-0" value="fun-lifestyle"><label for="term-232126349">Fun &amp; Lifestyle</label></span>
                                                           <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-1153090856 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/mobiles/" class="loclevel-0" value="mobiles"><label for="term-1153090856">Mobiles</label></span>


                                                           <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-547862955 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/writing-translation/" class="loclevel-0" value="writing-translation"><label for="term-547862955">Writing &amp; Translation</label></span>
                                                        </div>
                                                     </fieldset>
                                                  </div>
                                               </div>
                                            </div> -->


                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                    <h2>Location</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control wt-filter-field" placeholder="Search Location">
                                                                <a href="javascript:;" class="wt-searchgbtn"><i class="fa fa-filter"></i></a>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll">
                                                                <span class='wt-checkbox loclevel-0'><input name='location[]' type='checkbox' id=term-449874039 data-permalink="http://amentotech.com/projects/wpworkreap/location/australia/" class="loclevel-0" value="australia"><label for="term-449874039"><img class="wt-checkflag" alt="location" src="wp-content/uploads/2019/03/img-01-2.png">Australia</label></span>
                                                                <span class='wt-checkbox loclevel-0'><input name='location[]' type='checkbox' id=term-985270022 data-permalink="http://amentotech.com/projects/wpworkreap/location/canada/" class="loclevel-0" value="canada"><label for="term-985270022"><img class="wt-checkflag" alt="location" src="wp-content/uploads/2019/03/img-03-1.png">Canada</label></span>
                                                                <span class='wt-checkbox loclevel-0'><input name='location[]' type='checkbox' id=term-411675122 data-permalink="http://amentotech.com/projects/wpworkreap/location/england/" class="loclevel-0" value="england"><label for="term-411675122"><img class="wt-checkflag" alt="location" src="wp-content/uploads/2019/03/img-04-1.png">England</label></span>


                                                                <span class='wt-checkbox loclevel-0'><input name='location[]' type='checkbox' id=term-2140428318 data-permalink="http://amentotech.com/projects/wpworkreap/location/united-kingdom/" class="loclevel-0" value="united-kingdom"><label for="term-2140428318"><img class="wt-checkflag" alt="location" src="wp-content/uploads/2019/03/img-04-2.png">United Kingdom</label></span>
                                                                <span class='wt-checkbox loclevel-0'><input name='location[]' type='checkbox' id=term-1893018633 data-permalink="http://amentotech.com/projects/wpworkreap/location/united-states/" class="loclevel-0" value="united-states"><label for="term-1893018633"><img class="wt-checkflag" alt="location" src="wp-content/uploads/2019/03/img-02-2.png">United States</label></span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                    <h2>Skills</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control wt-filter-field" placeholder="Search Skills">
                                                                <a href="javascript:;" class="wt-searchgbtn"><i class="fa fa-filter"></i></a>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll">
                                                            <span class="wt-checkbox">
                                                            <input id="skill-259" type="checkbox" name="skills[]" value="android" >
                                                            <label for="skill-259">Android</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-42" type="checkbox" name="skills[]" value="api" >
                                                            <label for="skill-42">API</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-41" type="checkbox" name="skills[]" value="c" >
                                                            <label for="skill-41">C++</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-34" type="checkbox" name="skills[]" value="content-writing" >
                                                            <label for="skill-34">Content Writing</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-35" type="checkbox" name="skills[]" value="css" >
                                                            <label for="skill-35">CSS</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-43" type="checkbox" name="skills[]" value="facebook-api" >
                                                            <label for="skill-43">Facebook API</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-30" type="checkbox" name="skills[]" value="graphic-design" >
                                                            <label for="skill-30">Graphic Design</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-29" type="checkbox" name="skills[]" value="html-5" >
                                                            <label for="skill-29">HTML 5</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-40" type="checkbox" name="skills[]" value="java" >
                                                            <label for="skill-40">Java</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-36" type="checkbox" name="skills[]" value="jquery" >
                                                            <label for="skill-36">Jquery</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-33" type="checkbox" name="skills[]" value="my-sql" >
                                                            <label for="skill-33">My SQL</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-27" type="checkbox" name="skills[]" value="php" >
                                                            <label for="skill-27">PHP</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-32" type="checkbox" name="skills[]" value="seo" >
                                                            <label for="skill-32">SEO</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-28" type="checkbox" name="skills[]" value="website-design" >
                                                            <label for="skill-28">Website Design</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="skill-31" type="checkbox" name="skills[]" value="wordpress" >
                                                            <label for="skill-31">WordPress</label>
                                                            </span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                    <h2>English Level</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll">
                                                            <span class="wt-checkbox">
                                                            <input id="durationweekly" type="checkbox" name="duration[]" value="weekly" >
                                                            <label for="durationweekly">Basic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="durationmonthly" type="checkbox" name="duration[]" value="monthly" >
                                                            <label for="durationmonthly">Conversational</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="durationthree_month" type="checkbox" name="duration[]" value="three_month" >
                                                            <label for="durationthree_month">Fluent</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="durationsix_month" type="checkbox" name="duration[]" value="six_month" >
                                                            <label for="durationsix_month">Native Or Bilingual</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="durationmore_than_six" type="checkbox" name="duration[]" value="more_than_six" >
                                                            <label for="durationmore_than_six">Professional</label>
                                                            </span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                    <h2>Languages</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-formtheme wt-formsearch">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <input type="text" value="" class="form-control wt-filter-field" placeholder="Search Language">
                                                                <a href="javascript:;" class="wt-searchgbtn"><i class="fa fa-filter"></i></a>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="wt-checkboxholder wt-filterscroll">
                                                            <span class="wt-checkbox">
                                                            <input id="language62" type="checkbox" name="language[]" value="ab" >
                                                            <label for="language62"> Abkhazian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language63" type="checkbox" name="language[]" value="aa" >
                                                            <label for="language63"> Afar</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language65" type="checkbox" name="language[]" value="af" >
                                                            <label for="language65"> Afrikaans</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language66" type="checkbox" name="language[]" value="ak" >
                                                            <label for="language66"> Akan</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language67" type="checkbox" name="language[]" value="sq" >
                                                            <label for="language67"> Albanian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language68" type="checkbox" name="language[]" value="am" >
                                                            <label for="language68"> Amharic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language69" type="checkbox" name="language[]" value="ar" >
                                                            <label for="language69"> Arabic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language70" type="checkbox" name="language[]" value="an" >
                                                            <label for="language70"> Aragonese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language71" type="checkbox" name="language[]" value="hy" >
                                                            <label for="language71"> Armenian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language72" type="checkbox" name="language[]" value="as" >
                                                            <label for="language72"> Assamese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language73" type="checkbox" name="language[]" value="av" >
                                                            <label for="language73"> Avaric</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language74" type="checkbox" name="language[]" value="ae" >
                                                            <label for="language74"> Avestan</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language75" type="checkbox" name="language[]" value="ay" >
                                                            <label for="language75"> Aymara</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language76" type="checkbox" name="language[]" value="az" >
                                                            <label for="language76"> Azerbaijani</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language77" type="checkbox" name="language[]" value="bm" >
                                                            <label for="language77"> Bambara</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language78" type="checkbox" name="language[]" value="ba" >
                                                            <label for="language78"> Bashkir</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language79" type="checkbox" name="language[]" value="eu" >
                                                            <label for="language79"> Basque</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language80" type="checkbox" name="language[]" value="be" >
                                                            <label for="language80"> Belarusian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language81" type="checkbox" name="language[]" value="bn" >
                                                            <label for="language81"> Bengali</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language82" type="checkbox" name="language[]" value="bh" >
                                                            <label for="language82"> Bihari languages</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language83" type="checkbox" name="language[]" value="bi" >
                                                            <label for="language83"> Bislama</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language84" type="checkbox" name="language[]" value="bs" >
                                                            <label for="language84"> Bosnian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language85" type="checkbox" name="language[]" value="br" >
                                                            <label for="language85"> Breton</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language86" type="checkbox" name="language[]" value="bg" >
                                                            <label for="language86"> Bulgarian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language87" type="checkbox" name="language[]" value="my" >
                                                            <label for="language87"> Burmese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language89" type="checkbox" name="language[]" value="ct" >
                                                            <label for="language89"> Catalan, Catalunya</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language88" type="checkbox" name="language[]" value="ca" >
                                                            <label for="language88"> Catalan, Valencian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language90" type="checkbox" name="language[]" value="km" >
                                                            <label for="language90"> Central Khmer</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language91" type="checkbox" name="language[]" value="ch" >
                                                            <label for="language91"> Chamorro</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language92" type="checkbox" name="language[]" value="ce" >
                                                            <label for="language92"> Chechen</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language93" type="checkbox" name="language[]" value="ny" >
                                                            <label for="language93"> Chichewa, Chewa, Nyanja</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language94" type="checkbox" name="language[]" value="zh" >
                                                            <label for="language94"> Chinese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language95" type="checkbox" name="language[]" value="cu" >
                                                            <label for="language95"> Church Slavonic, Old Bulgarian, Old Church Slavonic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language96" type="checkbox" name="language[]" value="cv" >
                                                            <label for="language96"> Chuvash</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language97" type="checkbox" name="language[]" value="kw" >
                                                            <label for="language97"> Cornish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language98" type="checkbox" name="language[]" value="co" >
                                                            <label for="language98"> Corsican</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language99" type="checkbox" name="language[]" value="cr" >
                                                            <label for="language99"> Cree</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language100" type="checkbox" name="language[]" value="hr" >
                                                            <label for="language100"> Croatian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language101" type="checkbox" name="language[]" value="cs" >
                                                            <label for="language101"> Czech</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language102" type="checkbox" name="language[]" value="da" >
                                                            <label for="language102"> Danish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language103" type="checkbox" name="language[]" value="dv" >
                                                            <label for="language103"> Divehi, Dhivehi, Maldivian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language104" type="checkbox" name="language[]" value="nl" >
                                                            <label for="language104"> Dutch, Flemish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language105" type="checkbox" name="language[]" value="dz" >
                                                            <label for="language105"> Dzongkha</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language106" type="checkbox" name="language[]" value="en" >
                                                            <label for="language106"> English</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language107" type="checkbox" name="language[]" value="eo" >
                                                            <label for="language107"> Esperanto</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language108" type="checkbox" name="language[]" value="et" >
                                                            <label for="language108"> Estonian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language109" type="checkbox" name="language[]" value="ee" >
                                                            <label for="language109"> Ewe</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language110" type="checkbox" name="language[]" value="fo" >
                                                            <label for="language110"> Faroese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language111" type="checkbox" name="language[]" value="fj" >
                                                            <label for="language111"> Fijian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language112" type="checkbox" name="language[]" value="fi" >
                                                            <label for="language112"> Finnish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language113" type="checkbox" name="language[]" value="fr" >
                                                            <label for="language113"> French</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language114" type="checkbox" name="language[]" value="ff" >
                                                            <label for="language114"> Fulah</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language115" type="checkbox" name="language[]" value="gd" >
                                                            <label for="language115"> Gaelic, Scottish Gaelic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language116" type="checkbox" name="language[]" value="gl" >
                                                            <label for="language116"> Galician</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language117" type="checkbox" name="language[]" value="lg" >
                                                            <label for="language117"> Ganda</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language118" type="checkbox" name="language[]" value="ka" >
                                                            <label for="language118"> Georgian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language119" type="checkbox" name="language[]" value="de" >
                                                            <label for="language119"> German</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language120" type="checkbox" name="language[]" value="ki" >
                                                            <label for="language120"> Gikuyu, Kikuyu</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language121" type="checkbox" name="language[]" value="el" >
                                                            <label for="language121"> Greek (Modern)</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language122" type="checkbox" name="language[]" value="kl" >
                                                            <label for="language122"> Greenlandic, Kalaallisut</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language123" type="checkbox" name="language[]" value="gn" >
                                                            <label for="language123"> Guarani</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language124" type="checkbox" name="language[]" value="gu" >
                                                            <label for="language124"> Gujarati</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language125" type="checkbox" name="language[]" value="ht" >
                                                            <label for="language125"> Haitian, Haitian Creole</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language126" type="checkbox" name="language[]" value="ha" >
                                                            <label for="language126"> Hausa</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language127" type="checkbox" name="language[]" value="he" >
                                                            <label for="language127"> Hebrew</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language128" type="checkbox" name="language[]" value="hz" >
                                                            <label for="language128"> Herero</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language129" type="checkbox" name="language[]" value="hi" >
                                                            <label for="language129"> Hindi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language130" type="checkbox" name="language[]" value="ho" >
                                                            <label for="language130"> Hiri Motu</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language131" type="checkbox" name="language[]" value="hu" >
                                                            <label for="language131"> Hungarian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language132" type="checkbox" name="language[]" value="is" >
                                                            <label for="language132"> Icelandic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language133" type="checkbox" name="language[]" value="io" >
                                                            <label for="language133"> Ido</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language134" type="checkbox" name="language[]" value="ig" >
                                                            <label for="language134"> Igbo</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language135" type="checkbox" name="language[]" value="id" >
                                                            <label for="language135"> Indonesian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language136" type="checkbox" name="language[]" value="ia" >
                                                            <label for="language136"> Interlingua (International Auxiliary Language Association)</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language137" type="checkbox" name="language[]" value="ie" >
                                                            <label for="language137"> Interlingue</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language138" type="checkbox" name="language[]" value="iu" >
                                                            <label for="language138"> Inuktitut</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language139" type="checkbox" name="language[]" value="ik" >
                                                            <label for="language139"> Inupiaq</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language140" type="checkbox" name="language[]" value="ga" >
                                                            <label for="language140"> Irish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language141" type="checkbox" name="language[]" value="it" >
                                                            <label for="language141"> Italian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language142" type="checkbox" name="language[]" value="ja" >
                                                            <label for="language142"> Japanese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language143" type="checkbox" name="language[]" value="jv" >
                                                            <label for="language143"> Javanese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language144" type="checkbox" name="language[]" value="kn" >
                                                            <label for="language144"> Kannada</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language145" type="checkbox" name="language[]" value="kr" >
                                                            <label for="language145"> Kanuri</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language146" type="checkbox" name="language[]" value="ks" >
                                                            <label for="language146"> Kashmiri</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language147" type="checkbox" name="language[]" value="kk" >
                                                            <label for="language147"> Kazakh</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language148" type="checkbox" name="language[]" value="rw" >
                                                            <label for="language148"> Kinyarwanda</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language149" type="checkbox" name="language[]" value="kv" >
                                                            <label for="language149"> Komi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language150" type="checkbox" name="language[]" value="kg" >
                                                            <label for="language150"> Kongo</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language151" type="checkbox" name="language[]" value="ko" >
                                                            <label for="language151"> Korean</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language153" type="checkbox" name="language[]" value="ku" >
                                                            <label for="language153"> Kurdish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language152" type="checkbox" name="language[]" value="kj" >
                                                            <label for="language152"> Kwanyama, Kuanyama</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language154" type="checkbox" name="language[]" value="ky" >
                                                            <label for="language154"> Kyrgyz</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language155" type="checkbox" name="language[]" value="lo" >
                                                            <label for="language155"> Lao</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language156" type="checkbox" name="language[]" value="la" >
                                                            <label for="language156"> Latin</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language157" type="checkbox" name="language[]" value="lv" >
                                                            <label for="language157"> Latvian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language158" type="checkbox" name="language[]" value="lb" >
                                                            <label for="language158"> Letzeburgesch, Luxembourgish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language159" type="checkbox" name="language[]" value="li" >
                                                            <label for="language159"> Limburgish, Limburgan, Limburger</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language160" type="checkbox" name="language[]" value="ln" >
                                                            <label for="language160"> Lingala</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language161" type="checkbox" name="language[]" value="lt" >
                                                            <label for="language161"> Lithuanian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language162" type="checkbox" name="language[]" value="lu" >
                                                            <label for="language162"> Luba-Katanga</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language163" type="checkbox" name="language[]" value="mk" >
                                                            <label for="language163"> Macedonian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language164" type="checkbox" name="language[]" value="mg" >
                                                            <label for="language164"> Malagasy</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language165" type="checkbox" name="language[]" value="ms" >
                                                            <label for="language165"> Malay</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language166" type="checkbox" name="language[]" value="ml" >
                                                            <label for="language166"> Malayalam</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language167" type="checkbox" name="language[]" value="mt" >
                                                            <label for="language167"> Maltese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language168" type="checkbox" name="language[]" value="gv" >
                                                            <label for="language168"> Manx</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language169" type="checkbox" name="language[]" value="mi" >
                                                            <label for="language169"> Maori</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language170" type="checkbox" name="language[]" value="mr" >
                                                            <label for="language170"> Marathi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language171" type="checkbox" name="language[]" value="mh" >
                                                            <label for="language171"> Marshallese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language172" type="checkbox" name="language[]" value="ro" >
                                                            <label for="language172"> Moldovan, Moldavian, Romanian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language173" type="checkbox" name="language[]" value="mn" >
                                                            <label for="language173"> Mongolian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language174" type="checkbox" name="language[]" value="na" >
                                                            <label for="language174"> Nauru</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language175" type="checkbox" name="language[]" value="nv" >
                                                            <label for="language175"> Navajo, Navaho</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language177" type="checkbox" name="language[]" value="ng" >
                                                            <label for="language177"> Ndonga</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language178" type="checkbox" name="language[]" value="ne" >
                                                            <label for="language178"> Nepali</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language176" type="checkbox" name="language[]" value="nd" >
                                                            <label for="language176"> Northern Ndebele</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language179" type="checkbox" name="language[]" value="se" >
                                                            <label for="language179"> Northern Sami</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language180" type="checkbox" name="language[]" value="no" >
                                                            <label for="language180"> Norwegian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language181" type="checkbox" name="language[]" value="nb" >
                                                            <label for="language181"> Norwegian Bokmål</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language182" type="checkbox" name="language[]" value="nn" >
                                                            <label for="language182"> Norwegian Nynorsk</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language183" type="checkbox" name="language[]" value="ii" >
                                                            <label for="language183"> Nuosu, Sichuan Yi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language184" type="checkbox" name="language[]" value="oc" >
                                                            <label for="language184"> Occitan (post 1500)</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language185" type="checkbox" name="language[]" value="oj" >
                                                            <label for="language185"> Ojibwa</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language186" type="checkbox" name="language[]" value="or" >
                                                            <label for="language186"> Oriya</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language187" type="checkbox" name="language[]" value="om" >
                                                            <label for="language187"> Oromo</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language188" type="checkbox" name="language[]" value="os" >
                                                            <label for="language188"> Ossetian, Ossetic</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language189" type="checkbox" name="language[]" value="pi" >
                                                            <label for="language189"> Pali</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language190" type="checkbox" name="language[]" value="pa" >
                                                            <label for="language190"> Panjabi, Punjabi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language191" type="checkbox" name="language[]" value="ps" >
                                                            <label for="language191"> Pashto, Pushto</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language192" type="checkbox" name="language[]" value="fa" >
                                                            <label for="language192"> Persian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language193" type="checkbox" name="language[]" value="pl" >
                                                            <label for="language193"> Polish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language194" type="checkbox" name="language[]" value="pt" >
                                                            <label for="language194"> Portuguese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language195" type="checkbox" name="language[]" value="qu" >
                                                            <label for="language195"> Quechua</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language196" type="checkbox" name="language[]" value="rm" >
                                                            <label for="language196"> Romansh</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language197" type="checkbox" name="language[]" value="rn" >
                                                            <label for="language197"> Rundi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language198" type="checkbox" name="language[]" value="ru" >
                                                            <label for="language198"> Russian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language199" type="checkbox" name="language[]" value="sm" >
                                                            <label for="language199"> Samoan</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language200" type="checkbox" name="language[]" value="sg" >
                                                            <label for="language200"> Sango</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language201" type="checkbox" name="language[]" value="sa" >
                                                            <label for="language201"> Sanskrit</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language202" type="checkbox" name="language[]" value="sc" >
                                                            <label for="language202"> Sardinian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language203" type="checkbox" name="language[]" value="sr" >
                                                            <label for="language203"> Serbian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language204" type="checkbox" name="language[]" value="sn" >
                                                            <label for="language204"> Shona</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language205" type="checkbox" name="language[]" value="sd" >
                                                            <label for="language205"> Sindhi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language206" type="checkbox" name="language[]" value="si" >
                                                            <label for="language206"> Sinhala, Sinhalese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language207" type="checkbox" name="language[]" value="sk" >
                                                            <label for="language207"> Slovak</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language208" type="checkbox" name="language[]" value="sl" >
                                                            <label for="language208"> Slovenian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language209" type="checkbox" name="language[]" value="so" >
                                                            <label for="language209"> Somali</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language210" type="checkbox" name="language[]" value="st" >
                                                            <label for="language210"> Sotho, Southern</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language211" type="checkbox" name="language[]" value="nr" >
                                                            <label for="language211"> South Ndebele</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language212" type="checkbox" name="language[]" value="es" >
                                                            <label for="language212"> Spanish, Castilian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language213" type="checkbox" name="language[]" value="su" >
                                                            <label for="language213"> Sundanese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language214" type="checkbox" name="language[]" value="sw" >
                                                            <label for="language214"> Swahili</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language215" type="checkbox" name="language[]" value="ss" >
                                                            <label for="language215"> Swati</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language216" type="checkbox" name="language[]" value="sv" >
                                                            <label for="language216"> Swedish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language217" type="checkbox" name="language[]" value="tl" >
                                                            <label for="language217"> Tagalog</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language218" type="checkbox" name="language[]" value="ty" >
                                                            <label for="language218"> Tahitian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language219" type="checkbox" name="language[]" value="tg" >
                                                            <label for="language219"> Tajik</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language220" type="checkbox" name="language[]" value="ta" >
                                                            <label for="language220"> Tamil</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language221" type="checkbox" name="language[]" value="tt" >
                                                            <label for="language221"> Tatar</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language222" type="checkbox" name="language[]" value="te" >
                                                            <label for="language222"> Telugu</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language223" type="checkbox" name="language[]" value="th" >
                                                            <label for="language223"> Thai</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language224" type="checkbox" name="language[]" value="bo" >
                                                            <label for="language224"> Tibetan</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language225" type="checkbox" name="language[]" value="ti" >
                                                            <label for="language225"> Tigrinya</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language226" type="checkbox" name="language[]" value="to" >
                                                            <label for="language226"> Tonga (Tonga Islands)</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language227" type="checkbox" name="language[]" value="ts" >
                                                            <label for="language227"> Tsonga</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language228" type="checkbox" name="language[]" value="tn" >
                                                            <label for="language228"> Tswana</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language229" type="checkbox" name="language[]" value="tr" >
                                                            <label for="language229"> Turkish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language230" type="checkbox" name="language[]" value="tk" >
                                                            <label for="language230"> Turkmen</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language231" type="checkbox" name="language[]" value="tw" >
                                                            <label for="language231"> Twi</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language232" type="checkbox" name="language[]" value="ug" >
                                                            <label for="language232"> Uighur, Uyghur</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language233" type="checkbox" name="language[]" value="uk" >
                                                            <label for="language233"> Ukrainian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language234" type="checkbox" name="language[]" value="ur" >
                                                            <label for="language234"> Urdu</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language235" type="checkbox" name="language[]" value="uz" >
                                                            <label for="language235"> Uzbek</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language236" type="checkbox" name="language[]" value="ve" >
                                                            <label for="language236"> Venda</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language237" type="checkbox" name="language[]" value="vi" >
                                                            <label for="language237"> Vietnamese</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language238" type="checkbox" name="language[]" value="vo" >
                                                            <label for="language238"> Volap_k</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language239" type="checkbox" name="language[]" value="wa" >
                                                            <label for="language239"> Walloon</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language240" type="checkbox" name="language[]" value="cy" >
                                                            <label for="language240"> Welsh</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language241" type="checkbox" name="language[]" value="fy" >
                                                            <label for="language241"> Western Frisian</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language242" type="checkbox" name="language[]" value="wo" >
                                                            <label for="language242"> Wolof</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language243" type="checkbox" name="language[]" value="xh" >
                                                            <label for="language243"> Xhosa</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language244" type="checkbox" name="language[]" value="yi" >
                                                            <label for="language244"> Yiddish</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language245" type="checkbox" name="language[]" value="yo" >
                                                            <label for="language245"> Yoruba</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language246" type="checkbox" name="language[]" value="za" >
                                                            <label for="language246"> Zhuang, Chuang</label>
                                                            </span>
                                                                <span class="wt-checkbox">
                                                            <input id="language64" type="checkbox" name="language[]" value="zu" >
                                                            <label for="language64"> Zulu</label>
                                                            </span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgetcontent">
                                                    <div class="wt-applyfilters">
                                                        <span>Click “Apply Filter” to apply latest changes made by you.</span>
                                                        <input type="submit" class="wt-btn" value="Apply Filters">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-userlistingholder wt-haslayout">

                                @foreach($data as $item)

                                 <div class="wt-userlistinghold ">
                                    <figure class="wt-userlistingimg">
                                        <a href="freelancers-details.html"><img src="{{asset('frontend/wp-content/uploads/freelancers/3.jpg')}}" alt="Future"></a>
                                        <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                    </figure>
                                    <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                            <div class="wt-title">
                                                <a href="#">
                                                    <i class="fa fa-check-circle"></i>&nbsp;{{$item->name}}  </a>
                                                <h2><a href="freelancers-details.html">E-commerce design & developer</a></h2>
                                            </div>
                                            <ul class="wt-userlisting-breadcrumb ">
{{--                                                <li><span><i class="fa fa-money"></i>Tk. 500.00&nbsp;/&nbsp;hr</span></li>--}}
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.png')}}" alt="//amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/img-01-2.png"></em>Bangladesh                                                         </span>
                                                </li>
                                                <li>            <a href="javascript:;" class="wt-clicksave wt-savefreelancer" data-id="351" data-text="Saved"><i class="fa fa-heart" ></i><span>Click to Save</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="wt-rightarea user-stars-v2">
                                            <span class="wt-stars"><span style="width: 0%;"></span></span><span class="wt-starcontent">0.0<sub>/5</sub><em>(0&nbsp;Feedback)</em></span>
                                        </div>
                                    </div>
                                    <div class="wt-description">
                                        <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim id est laborum. Seden utem perspiciatis undesieu omnis iste natus error&hellip;</p>
                                    </div>
                                    <div class="wt-tag wt-widgettag">
                                        <a  class="skills_351" href="#">Content Writing</a>
                                        <a  class="skills_351" href="#">CSS</a>
                                        <a  class="skills_351" href="#">Graphic Design</a>
                                        <a  class="skills_351" href="#">HTML 5</a>
                                        <a  class="skills_351" href="#">Jquery</a>
                                        <a href="javascript:;" class="showmore_skills" data-id="351">...</a>                          <a style="display: none;" class="skills_351" href="#">My SQL</a>
                                        <a style="display: none;" class="skills_351" href="#">PHP</a>
                                        <a style="display: none;" class="skills_351" href="#">Website Design</a>
                                        <a style="display: none;" class="skills_351" href="#">WordPress</a>
                                    </div>
                                </div>

                                @endforeach

                                <div class='wt-paginationvtwo'>
                                    <nav class="wt-pagination">
                                        <ul>
                                            <li class="wt-active"><a href='javascript:;'>1</a></li>
                                            <li><a href='page/2/index.html' class="inactive">2</a></li>
                                            <li><a href='page/3/index.html' class="inactive">3</a></li>
                                            <li class='wt-nextpage'><a href="page/2/index.html"><i class="lnr lnr-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
