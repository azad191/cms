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
                                    @foreach ($data as $item)
                                       @foreach ($item->jobPost as $jobItem)
                                       <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="project-details.html">
                                                <i class="fa fa-check-circle"></i>{{$item->name}}</a>
                                                <h2><a href="project-details.html">{{$jobItem->job_title}}</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p class="text-justify">{{substr($jobItem->description, 0,300)}}</p>
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
                                                <li><span class="text-capitalize"><i class="fa fa-check-circle wt-viewjobdollar"></i>{{$jobItem->project_level}}</span></li>
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.pn')}}g" alt=""></em>
                                                   Bangladesh															
                                                </span>
                                                </li>
                                                <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:{{$jobItem->price}}</span></li>
                                                <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>Less than a month</span></li>
                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>{{\Carbon\Carbon::parse($jobItem->project_expire)->format('d-m-Y, h:i A')}}</span></li>
                                                <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.70000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="project-details.html" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                       @endforeach

                                    @endforeach
                                   

                               
                                    

                                   
                                    <div class='wt-paginationvtwo'>
                                   
                                       <nav class="wt-pagination">
                                          <!-- <ul>
                                             <li class="wt-active"><a href='javascript:;'>1</a></li>
                                             <li><a href='page/2/index.html' class="inactive">2</a></li>
                                             <li><a href='page/3/index.html' class="inactive">3</a></li>
                                             <li class='wt-nextpage'><a href="page/2/index.html"><i class="lnr lnr-chevron-right"></i></a></li>
                                          </ul> -->
                                          {{ $data->links() }}
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