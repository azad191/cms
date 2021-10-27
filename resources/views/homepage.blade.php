@extends('frontend.components.app')
@section('content')

    <div class="container">

        <div class="wt-haslayout wt-haslayout page-data">
            <div class="main-page-wrapper">
                <div class="fw-page-builder-content">
                    <section  class="wt-main-section wt-haslayout  stretch_section wt-elm-section"  style="background-image:url({{url('frontend/wp-content/uploads/2019/04/banner-front.jpg')}});margin-top:-100px;padding-top:80px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;"  >
                        <div class="builder-items row">
                            <div class="col-xs-12 col-md-12 builder-column " >
                                <div class="wt-sc-banner wt-haslayout dynamic-secton-452200">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                            <div class="wt-bannerimages">
                                                <figure class="wt-bannermanimg">
                                                    <img class="" src="{{asset('frontend/wp-content/uploads/2019/03/img-01-5.png')}}" alt="Banner">
                                                    <img class="wt-bannermanimgone" src="{{asset('frontend/wp-content/uploads/2019/03/img-02-3.png')}}" alt="Banner1">
                                                    <img class="wt-bannermanimgtwo" src="{{asset('frontend/wp-content/uploads/2019/03/img-03-3.png')}}" alt="Banner2">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                            <div class="wt-bannercontent">
                                                <div class="wt-bannerhead">
                                                    <div class="wt-title">
                                                        <h1 style="font-size: 39px"><span>Hire expert Women freelancers</span>for any job, Online</h1>
                                                    </div>
                                                    <div class="wt-description">
                                                        <p>Consectetur adipisicing elit sed dotem eiusmod tempor incuntes ut labore etdolore maigna aliqua enim.</p>
                                                    </div>
                                                </div>
                                                <form class="wt-formtheme wt-formbanner" action="http://amentotech.com/projects/wpworkreap/search-projects/" method="get">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <input type="text" name="keyword" class="form-control" placeholder="I’m looking for">
                                                            <div class="wt-formoptions">
                                                                <div class="wt-dropdown">
                                                                    <span><em class="selected-search-type">Jobs</em><i class="lnr lnr-chevron-down"></i></span>
                                                                </div>
                                                                <div class="wt-radioholder">
                                                               <span class="wt-radio">
                                                               <input id="wt-job" data-url="http://amentotech.com/projects/wpworkreap/search-projects/" data-title="Jobs" type="radio" name="searchtype" value="job" checked>
                                                               <label for="wt-job">Jobs</label>
                                                               </span>
                                                                    <span class="wt-radio">
                                                               <input id="wt-freelancer" data-url="http://amentotech.com/projects/wpworkreap/search-freelancers/" data-title="Freelancers" type="radio" name="searchtype" value="freelancer" >
                                                               <label for="wt-freelancer">Freelancers</label>
                                                               </span>
                                                                    <span class="wt-radio">


                                                               <input id="wt-employer" data-url="http://amentotech.com/projects/wpworkreap/search-employers/" data-title="Employers" type="radio" name="searchtype" value="employer" >
                                                               <label for="wt-employer">Employers</label>
                                                               </span>
                                                                    <span class="wt-radio">
                                                               <input id="wt-services" data-url="http://amentotech.com/projects/wpworkreap/search-services/" data-title="Services" type="radio" name="searchtype" value="services" >
                                                               <label for="wt-services">Services</label>
                                                               </span>
                                                                </div>
                                                                <button type="submit" class="wt-searchbtn"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                                <!-- <div class="wt-videoholder">
                                                    <div class="wt-videoshow">
                                                        <a data-rel="prettyPhoto[video]" href="https://www.youtube.com/watch?v=EgeOgt6nqcU" rel="prettyPhoto[video]"><i class="fa fa-play"></i></a>
                                                    </div>
                                                    <div class="wt-videocontent">
                                                        <span>See For Yourself!<em>How it works & experience the ultimate joy.</em></span>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="section-current-width"></div>


                    <!-- How it Works -->

                    <div class="fourServices section-padding" id="recent" >
                        <div class="container text-xs-center">
                            <h1 style="margin-top: 30px" class="uppr bold">HOW IT WORKS</h1>
                            <div class="divider mb-30">
                                <div class="hr-line"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="fourBlock text-xs-center blue-color">
                                        <img class="" src="https://assets.truelancer.com/assets/home_v/images/hiwIcn_01.png" alt="post project to hire freelancer">
                                        <h4 class="bold">
                                            Post Project
                                        </h4>
                                        <div class="divider">
                                            <div class="hr-line"></div>
                                        </div>
                                        <p>
                                            Post a Project to tell us about your project. We’ll quickly match you with awesome freelancers.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="fourBlock text-xs-center blue-color">
                                        <img class="" src="https://assets.truelancer.com/assets/home_v/images/hiwIcn_02.webp" alt="search freelancers and hire online">
                                        <h4 class="bold">
                                            Find &amp; Hire
                                        </h4>
                                        <div class="divider">
                                            <div class="hr-line"></div>
                                        </div>
                                        <p>
                                            Browse proposals, profiles of freelancers &amp; their reviews. Compare, Interview &amp; finalise the candidate.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="fourBlock text-xs-center blue-color">
                                        <img class="" src="https://assets.truelancer.com/assets/home_v/images/hiwIcn_04.png" alt="pay freelancer">
                                        <h4 class="bold">
                                            Award &amp; Pay
                                        </h4>
                                        <div class="divider">
                                            <div class="hr-line"></div>
                                        </div>
                                        <p>
                                            Award Project to the finalised freelancer on Truelancer &amp; enjoy 100% money back guarantee using Safe Deposit.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="fourBlock text-xs-center blue-color">
                                        <img class="" src="https://assets.truelancer.com/assets/home_v/images/hiwIcn_03.png" alt="work with freelancer">
                                        <h4 class="bold">
                                            Work &amp; Approve
                                        </h4>
                                        <div class="divider">
                                            <div class="hr-line"></div>
                                        </div>
                                        <p>
                                            Use Truelancer to chat, share files &amp; collaborate with your freelancer. Release the payment once satisfied.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- How it Works -->

                    <!--  -->




                    <!--  -->



                    <section  class="wt-main-section wt-haslayout  stretch_section wt-elm-section"  style="background-color:#ffffff;padding-top:25px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;"  >
                        <div class="builder-items row">
                            <div class="col-xs-12 col-md-12 builder-column " >
                                <div class="wt-sc-explore-categories wt-haslayout">
                                    <div class="row justify-content-md-center">
                                        <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                                            <div class="wt-sectionhead wt-textcenter">
                                                <div class="wt-sectiontitle">
                                                    <!--<h2>Explore Categories</h2>-->
                                                    <h2>Specialized Experts</h2>
                                                    <span>Search jobs by categories</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-categoryexpl ">
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/01.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">Graphic & Design</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/02.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">Website Designing</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/04.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">video & animation</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/05.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">Customer Support</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/img-04.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">Music &amp; Audio</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/img-05.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">Programming &amp; Tech</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/img-06.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="search-projects/index7cc7.html?category%5B%5D=business">Business</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="search-projects/index7cc7.html?category%5B%5D=business">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-left">
                                                <div class="wt-categorycontent">
                                                    <figure><img src="wp-content/uploads/2019/05/img-07.png" alt="Category"></figure>
                                                    <div class="wt-cattitle">
                                                        <h3><a href="#">Fun &amp; Lifestyle</a></h3>
                                                    </div>
                                                    <div class="wt-categoryslidup">
                                                        <p>Consectetur adipisicing elitaed eiusmod tempor incididuatna labore et dolore magna.</p>
                                                        <a href="#">Explore&nbsp;<i class="fa fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                                                <div class="wt-btnarea">
                                                    <a href="#" class="wt-btn">View all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="section-current-width"></div>



                    <!--  -->

                    <section class="elementor-element elementor-element-60e6fc3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="60e6fc3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-477d8cb elementor-column elementor-col-100 elementor-top-column" data-id="477d8cb" data-element_type="column">
                                    <div class="elementor-column-wrap  elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-2790680 elementor-widget elementor-widget-wt_element_top_freelancers" data-id="2790680" data-element_type="widget" data-widget_type="wt_element_top_freelancers.default">
                                                <div class="elementor-widget-container">
                                                    <div class="wt-sc-top-freelancers wt-latearticles">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-12 col-sm-12 col-md-8 push-md-2 col-lg-8 push-lg-2">
                                                                <div class="wt-sectionhead wt-textcenter">
                                                                    <div class="wt-sectiontitle">
                                                                        <h2>Top Freelancers</h2>
                                                                        <span>Start With Great Peoples</span>
                                                                    </div>
                                                                    <!-- <div class="wt-description">
                                                                       <p>Lorem ipsum dolor amet consectetur adipisicing eliteiuim sete eiusmod tempor incididunt ut labore etnalom dolore magna aliqua udiminimate veniam quis norud.</p>
                                                                    </div> -->
                                                                </div>
                                                            </div>

                                                            <div class="wt-topfreelancers">
                                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 float-left wt-verticaltop">
                                                                    <div class="wt-freelanceritems">
                                                                        <div class="wt-userlistinghold ">
                                                                            <div class="wt-userlistingcontent">
                                                                                <figure>
                                                                                    <img src="wp-content/uploads/freelancers/1.jpg" alt="Web Design & Developer">
                                                                                    <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                                                                </figure>
                                                                                <div class="wt-contenthead">
                                                                                    <div class="wt-title">
                                                                                        <a href="#">
                                                                                            <i class="fa fa-check-circle"></i>&nbsp;Saima AKter								</a>
                                                                                        <h2>Web Designer</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wt-viewjobholder">
                                                                                    <ul>
                                                                                        <li><span><i class="fa fa-money"></i>Tk.500.00&nbsp;/&nbsp;hr</span></li>

                                                                                        <li>				<a href="javascript:;" class="wt-clicksave wt-savefreelancer" data-id="348" data-text="Saved"><i class="fa fa-heart"></i><span>Save</span></a></li>
                                                                                        <li>
                                                                                            <a href="javascript:;" class="wt-freestars">
                                                                                                <i class="fa fa-star"></i>0.0/5&nbsp;<em>(0&nbsp;Feedback)</em>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 float-left wt-verticaltop">
                                                                    <div class="wt-freelanceritems">
                                                                        <div class="wt-userlistinghold ">
                                                                            <div class="wt-userlistingcontent">
                                                                                <figure>
                                                                                    <img src="wp-content/uploads/freelancers/3.jpg" alt="The world’s networking company">
                                                                                    <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                                                                </figure>
                                                                                <div class="wt-contenthead">
                                                                                    <div class="wt-title">
                                                                                        <a href="#">
                                                                                            <i class="fa fa-check-circle"></i>&nbsp;Sadia Akter								</a>
                                                                                        <h2>Graphics Designer</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wt-viewjobholder">
                                                                                    <ul>
                                                                                        <li><span><i class="fa fa-money"></i>Tk.400.00&nbsp;/&nbsp;hr</span></li>

                                                                                        <li>				<a href="javascript:;" class="wt-clicksave wt-savefreelancer" data-id="349" data-text="Saved"><i class="fa fa-heart"></i><span>Save</span></a></li>
                                                                                        <li>
                                                                                            <a href="javascript:;" class="wt-freestars">
                                                                                                <i class="fa fa-star"></i>0.0/5&nbsp;<em>(0&nbsp;Feedback)</em>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 float-left wt-verticaltop">
                                                                    <div class="wt-freelanceritems">
                                                                        <div class="wt-userlistinghold ">
                                                                            <div class="wt-userlistingcontent">
                                                                                <figure>
                                                                                    <img src="wp-content/uploads/freelancers/2.jpg" alt="The world’s networking company">
                                                                                    <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                                                                </figure>
                                                                                <div class="wt-contenthead">
                                                                                    <div class="wt-title">
                                                                                        <a href="#">
                                                                                            <i class="fa fa-check-circle"></i>&nbsp;Jerin Khan                             </a>
                                                                                        <h2>Programmer</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wt-viewjobholder">
                                                                                    <ul>
                                                                                        <li><span><i class="fa fa-money"></i>Tk.350.00&nbsp;/&nbsp;hr</span></li>

                                                                                        <li>             <a href="javascript:;" class="wt-clicksave wt-savefreelancer" data-id="349" data-text="Saved"><i class="fa fa-heart"></i><span>Save</span></a></li>
                                                                                        <li>
                                                                                            <a href="javascript:;" class="wt-freestars">
                                                                                                <i class="fa fa-star"></i>0.0/5&nbsp;<em>(0&nbsp;Feedback)</em>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 float-left wt-verticaltop">
                                                                    <div class="wt-freelanceritems">
                                                                        <div class="wt-userlistinghold ">
                                                                            <div class="wt-userlistingcontent">
                                                                                <figure>
                                                                                    <img src="wp-content/uploads/freelancers/4.jpg" alt="The world’s networking company">
                                                                                    <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                                                                </figure>
                                                                                <div class="wt-contenthead">
                                                                                    <div class="wt-title">
                                                                                        <a href="#">
                                                                                            <i class="fa fa-check-circle"></i>&nbsp;Masuma Sarker                            </a>
                                                                                        <h2>Video & Animation</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wt-viewjobholder">
                                                                                    <ul>
                                                                                        <li><span><i class="fa fa-money"></i>Tk.200.00&nbsp;/&nbsp;hr</span></li>

                                                                                        <li>             <a href="javascript:;" class="wt-clicksave wt-savefreelancer" data-id="349" data-text="Saved"><i class="fa fa-heart"></i><span>Save</span></a></li>
                                                                                        <li>
                                                                                            <a href="javascript:;" class="wt-freestars">
                                                                                                <i class="fa fa-star"></i>0.0/5&nbsp;<em>(0&nbsp;Feedback)</em>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  -->





                    <!--  <section  class="wt-main-section wt-haslayout  stretch_section wt-elm-section"  style="padding-top:0px;padding-bottom:0px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;"  >
                         <div class="builder-items row">
                             <div class="col-xs-12 col-md-12 builder-column " >
                                 <div class="wt-sc-services wt-haslayout">
                                     <div class="wt-companydetails">
                                         <div class="wt-companycontent">
                                             <div class="wt-companyinfotitle">
                                                 <h2>Start As Company</h2>
                                             </div>
                                             <div class="wt-description">
                                                 <p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.</p>
                                             </div>
                                             <div class="wt-btnarea">
                                                 <a href="#" class="wt-btn">Join now</a>
                                             </div>
                                         </div>
                                         <div class="wt-companycontent">
                                             <div class="wt-companyinfotitle">
                                                 <h2>Start As Freelancer</h2>
                                             </div>
                                             <div class="wt-description">
                                                 <p>Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum.</p>
                                             </div>
                                             <div class="wt-btnarea">
                                                 <a href="#" class="wt-btn">Join now</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </section>
                     <div class="section-current-width"></div> -->

                    <!--<section  class="wt-main-section wt-haslayout  stretch_section wt-elm-section"  style="background-color:#ffffff;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;"  >-->
                    <!--<div class="builder-items row">-->
                    <!--<div class="col-xs-12 col-md-12 builder-column " >-->
                    <!--<div class="wt-sc-explore-cat wt-haslayout">-->
                    <!--<div class="row">-->
                    <!--<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">-->
                    <!--<figure class="wt-mobileimg">-->
                    <!--<img src="wp-content/uploads/2019/04/mobile-img.png" alt="APP">-->
                    <!--</figure>-->
                    <!--</div>-->
                    <!--<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">-->
                    <!--<div class="wt-experienceholder">-->
                    <!--<div class="wt-sectionhead">-->
                    <!--<div class="wt-sectiontitle">-->
                    <!--<h2>Limitless Experience</h2>-->
                    <!--<span>Roam Around With Your Business</span>-->
                    <!--</div>-->
                    <!--<div class="wt-description">-->
                    <!--<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce.</p>-->
                    <!--<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumed perspiciatis.</p>-->
                    <!--</div>-->
                    <!--<ul class="wt-appicon">-->
                    <!--<li>-->
                    <!--<a target="_blank" href="https://play.google.com/store/apps/details?id=com.app.amento.workreap">-->
                    <!--<figure><img src="wp-content/uploads/2019/03/img-01-6.png" alt="Logo"></figure>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a target="_blank" href="https://play.google.com/store/apps/details?id=com.app.amento.workreap">-->
                    <!--<figure><img src="wp-content/uploads/2019/03/img-02-4.png" alt="Logo"></figure>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</section>-->

                    <!--<div class="section-current-width"></div>-->
                    <section  class="wt-main-section wt-haslayout  stretch_section wt-elm-section"  style="background-color:#fff;margin-bottom:0px;padding-bottom:20px;background-repeat:no-repeat;background-position:0% 100%; background-size: cover;"  >
                        <div class="builder-items row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 builder-column " >
                                <div class="wt-sc-by-skills wt-haslayout">
                                    <div class="wt-widgetskills">
                                        <div class="wt-fwidgettitle">
                                            <h3>By skills</h3>
                                        </div>
                                        <ul class="wt-fwidgetcontent">
                                            <li><a href="#">Content Writing</a></li>
                                            <li><a href="#">Facebook API</a></li>
                                            <li><a href="#">Graphic Design</a></li>
                                            <li><a href="#">Website Design</a></li>
                                            <li class="wt-viewmore"><a href="#">View all</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 builder-column " >
                                <div class="wt-sc-skill-location wt-haslayout">
                                    <div class="wt-widgetskills">
                                        <div class="wt-fwidgettitle">
                                            <h3>Skill by US</h3>
                                        </div>
                                        <ul class="wt-fwidgetcontent">
                                            <li>
                                                <a href="#">
                                                    API&nbsp;in&nbsp;United States					</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    C++&nbsp;in&nbsp;United States					</a>
                                            </li>
                                            <li>
                                                <a href="search-projects/indexf90f.html?skills%5B%5D=content-writing&amp;location%5B%5D=united-states">
                                                    Content Writing&nbsp;in&nbsp;United States					</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    CSS&nbsp;in&nbsp;United States					</a>
                                            </li>
                                            <!--<li>-->
                                            <!--<a href="search-projects/index8e7b.html?skills%5B%5D=facebook-api&amp;location%5B%5D=united-states">-->
                                            <!--Facebook API&nbsp;in&nbsp;United States					</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="search-projects/index7aa0.html?skills%5B%5D=graphic-design&amp;location%5B%5D=united-states">-->
                                            <!--Graphic Design&nbsp;in&nbsp;United States					</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="search-projects/index5a6b.html?skills%5B%5D=html-5&amp;location%5B%5D=united-states">-->
                                            <!--HTML 5&nbsp;in&nbsp;United States					</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="search-projects/indexb8cc.html?skills%5B%5D=java&amp;location%5B%5D=united-states">-->
                                            <!--Java&nbsp;in&nbsp;United States					</a>-->
                                            <!--</li>-->
                                            <li class="wt-viewmore"><a href="#">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 builder-column " >
                                <div class="wt-sc-by-categories wt-haslayout">
                                    <div class="wt-widgetskills">
                                        <div class="wt-fwidgettitle">
                                            <h3>By Categories</h3>
                                        </div>
                                        <ul class="wt-fwidgetcontent">
                                            <!--<li><a href="search-projects/index23a0.html?category%5B%5D=programming-tech">Programming &amp; Tech</a></li>-->
                                            <li><a href="#">Digital Marketing</a></li>
                                            <li><a href="#">Fun &amp; Lifestyle</a></li>
                                            <li><a href="#">Music &amp; Audio</a></li>
                                            <li><a href="#">Video &amp; Animation</a></li>
                                            <!--<li><a href="search-projects/index7cc7.html?category%5B%5D=business">Business</a></li>-->
                                            <!--<li><a href="search-projects/indexbf96.html?category%5B%5D=mobiles">Mobiles</a></li>-->
                                            <li class="wt-viewmore"><a href="#">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 builder-column " >
                                <div class="wt-sc-by-location wt-haslayout">
                                    <div class="wt-widgetskills">
                                        <div class="wt-fwidgettitle">
                                            <h3>By Locations</h3>
                                        </div>
                                        <ul class="wt-fwidgetcontent">
                                            <li><a href="#">Gulshan</a></li>
                                            <li><a href="#">Karwan Bazar</a></li>
                                            <li><a href="#">Dhanmondi</a></li>
                                            <li><a href="#">Farmgate</a></li>


                                            <li class="wt-viewmore"><a href="#">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="section-current-width"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
