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
                                          <form method="get" name="serach-projects" action="#">
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
                                                   <h2>Filter by price</h2>
                                                   <span class="lnr lnr-pencil custom-price-edit"></span>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                   <div class="wt-formtheme wt-formsearch">
                                                      <fieldset>
                                                         <div class="form-group">
                                                            <div class="starts_from wt-themerangeslider" id="starts_from"></div>
                                                         </div>
                                                         <div class="wt-amountbox">
                                                            <input type="text" value="&#036;0 - &#036;1000" id="wt-consultationfeeamount" readonly>
                                                         </div>
                                                         <div class="offer-filter wt-hide-form">
                                                            <input type="text" name="minprice" class="ca-minprice" value="0">
                                                            <input type="text" name="maxprice" class="ca-maxprice" value="1000">
                                                         </div>
                                                      </fieldset>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="wt-widget wt-effectiveholder">
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
                                                            <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-1001792707 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/music-audio/" class="loclevel-0" value="music-audio"><label for="term-1001792707">Music &amp; Audio</label></span>
                                                            <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-1039121916 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/programming-tech/" class="loclevel-0" value="programming-tech"><label for="term-1039121916">Programming &amp; Tech</label></span>
                                                            <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-1422310837 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/video-animation/" class="loclevel-0" value="video-animation"><label for="term-1422310837">Video &amp; Animation</label></span>
                                                            <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-547862955 data-permalink="http://amentotech.com/projects/wpworkreap/project_cat/writing-translation/" class="loclevel-0" value="writing-translation"><label for="term-547862955">Writing &amp; Translation</label></span>
                                                         </div>
                                                      </fieldset>
                                                   </div>
                                                </div>
                                             </div>
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
                                                   <h2>Project Length</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                   <div class="wt-formtheme wt-formsearch">
                                                      <fieldset>
                                                         <div class="wt-checkboxholder wt-filterscroll">              
                                                            <span class="wt-checkbox">
                                                            <input id="durationweekly" type="checkbox" name="duration[]" value="weekly" >
                                                            <label for="durationweekly">Less than a week</label>
                                                            </span>
                                                            <span class="wt-checkbox">
                                                            <input id="durationmonthly" type="checkbox" name="duration[]" value="monthly" >
                                                            <label for="durationmonthly">Less than a month</label>
                                                            </span>
                                                            <span class="wt-checkbox">
                                                            <input id="durationthree_month" type="checkbox" name="duration[]" value="three_month" >
                                                            <label for="durationthree_month">01 to 03 months</label>
                                                            </span>
                                                            <span class="wt-checkbox">
                                                            <input id="durationsix_month" type="checkbox" name="duration[]" value="six_month" >
                                                            <label for="durationsix_month">03 to 06 months</label>
                                                            </span>
                                                            <span class="wt-checkbox">
                                                            <input id="durationmore_than_six" type="checkbox" name="duration[]" value="more_than_six" >
                                                            <label for="durationmore_than_six">More than 06 months</label>
                                                            </span>
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
                                                            <input id="freelancerindependent" type="checkbox" name="type[]" value="independent" >
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
                                    
                                    <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="project-details.html">
                                                <i class="fa fa-check-circle"></i>&nbsp;Nusrat Jahan								</a>
                                                <h2><a href="project-details.html"> Tracking System</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae&hellip;</p>
                                             </div>
                                             <div class="wt-tag wt-widgettag">
                                                <a  class="skills_181" href="../skill/facebook-api/index.html">Facebook API</a>                     
                                                <a  class="skills_181" href="../skill/html-5/index.html">HTML 5</a>                     
                                                <a  class="skills_181" href="../skill/jquery/index.html">Jquery</a>                     
                                                <a  class="skills_181" href="../skill/wordpress/index.html">WordPress</a>                     
                                             </div>
                                          </div>


                                          <div class="wt-viewjobholder">
                                             <ul>
                                                <li><span><i class="fa fa-check-circle wt-viewjobdollar"></i>Basic Level</span></li>
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="wp-content/uploads/2019/03/img-05-1.png" alt="//amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/img-05-1.png"></em>Bangladesh															</span>
                                                </li>
                                                <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:Fixed</span></li>
                                                <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>Less than a month</span></li>
                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>January 23, 2020</span></li>
                                                <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.70000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="project-details.html" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>


                                       </div>
                                    </div>


                                    <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="#">
                                                <i class="fa fa-check-circle"></i>&nbsp;Maria Nur</a>
                                                <h2><a href="#">e-Commerce multi-Vendor</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae&hellip;</p>
                                             </div>
                                             <div class="wt-tag wt-widgettag">
                                                <a  class="skills_180" href="../skill/content-writing/index.html">Content Writing</a>                     
                                                <a  class="skills_180" href="../skill/graphic-design/index.html">Graphic Design</a>                     
                                                <a  class="skills_180" href="../skill/html-5/index.html">HTML 5</a>                     
                                                <a  class="skills_180" href="../skill/java/index.html">Java</a>                     
                                             </div>
                                          </div>
                                          <div class="wt-viewjobholder">
                                             <ul>
                                                <li><span><i class="fa fa-check-circle  wt-viewjobdollar"></i>Basic Level</span></li>
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="wp-content/uploads/2019/03/img-05-1.png" alt="//amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/img-05-1.png"></em>United States															</span>
                                                </li>
                                                <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:Fixed</span></li>
                                                <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>More than 06 months</span></li>
                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>January 23, 2020</span></li>
                                                 <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.50000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="180"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="../project/timber-management-professor/index.html" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="project-details.html">
                                                <i class="fa fa-check-circle"></i>&nbsp;Nusrat Jahan                                </a>
                                                <h2><a href="project-details.html"> Tracking System</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae&hellip;</p>
                                             </div>
                                             <div class="wt-tag wt-widgettag">
                                                <a  class="skills_181" href="../skill/facebook-api/index.html">Facebook API</a>                     
                                                <a  class="skills_181" href="../skill/html-5/index.html">HTML 5</a>                     
                                                <a  class="skills_181" href="../skill/jquery/index.html">Jquery</a>                     
                                                <a  class="skills_181" href="../skill/wordpress/index.html">WordPress</a>                     
                                             </div>
                                          </div>


                                          <div class="wt-viewjobholder">
                                             <ul>
                                                <li><span><i class="fa fa-check-circle wt-viewjobdollar"></i>Basic Level</span></li>
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="wp-content/uploads/2019/03/img-05-1.png" alt="//amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/img-05-1.png"></em>Bangladesh                                                           </span>
                                                </li>
                                                <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:Fixed</span></li>
                                                <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>Less than a month</span></li>
                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>January 23, 2020</span></li>
                                                <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.70000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="project-details.html" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>


                                       </div>
                                    </div>


                                    <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="#">
                                                <i class="fa fa-check-circle"></i>&nbsp;Maria Nur</a>
                                                <h2><a href="#">e-Commerce multi-Vendor</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p>Excepteur sint occaecat cupidatat non proident, saeunt in culpa qui officia deserunt mollit anim laborum. Seden utem perspiciatis undesieu omnis voluptatem accusantium doque laudantium, totam rem aiam eaqueiu ipsa quae&hellip;</p>
                                             </div>
                                             <div class="wt-tag wt-widgettag">
                                                <a  class="skills_180" href="../skill/content-writing/index.html">Content Writing</a>                     
                                                <a  class="skills_180" href="../skill/graphic-design/index.html">Graphic Design</a>                     
                                                <a  class="skills_180" href="../skill/html-5/index.html">HTML 5</a>                     
                                                <a  class="skills_180" href="../skill/java/index.html">Java</a>                     
                                             </div>
                                          </div>
                                          <div class="wt-viewjobholder">
                                             <ul>
                                                <li><span><i class="fa fa-dollar wt-viewjobdollar"></i>Basic Level</span></li>
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="wp-content/uploads/2019/03/img-05-1.png" alt="//amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/img-05-1.png"></em>United States                                                            </span>
                                                </li>
                                                <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:Fixed</span></li>
                                                <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>More than 06 months</span></li>
                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>January 23, 2020</span></li>
                                                 <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.50000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="180"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="../project/timber-management-professor/index.html" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>

                                    

                                   
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