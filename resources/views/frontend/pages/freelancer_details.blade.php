@extends('frontend.components.app')
@section('content')
 
<div class="wt-sectionspacetop wt-haslayout">
              <div class="wt-haslayout wt-innerbannerholder frinnerbannerholder wt-innerbannerholdervtwo" style="background-image:url({{url('frontend/wp-content/uploads/2019/03/7-2-1920x400.jpg')}});">
                 <div class="container">
                    <div class="row justify-content-md-center">
                       <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3"></div>
                    </div>
                 </div>
              </div>
              <div class="wt-sectionspacetop wt-haslayout">
                 <div class="container">
                    <div class="row">
                       <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                          <div class="wt-userprofileholder">
                             <div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
                                <div class="row">
                                   <div class="wt-userprofile">
                                      <figure>
                                         <!-- <img src="{{asset('frontend/wp-content/uploads/freelancers/1.jpg')}}" alt="freelancer"> -->
                                       
                                         <img src="{{$data->freelancerProfile->profile_image !=null ? asset('backend/uploads/freelancer/profile/'.$data->freelancerProfile->profile_image) : asset('backend/uploads/freelancer/profile/default.png')}}" alt="freelancer">
                                         <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                      </figure>
                                      <div class="wt-title">
                                         <h1><i class="fa fa-check-circle"></i> {{$data->name}}  </h1>
                                         <div class="wt-sinle-pmeta">
                                            <div class="wt-proposalfeedback">
                                               <span class="wt-starcontent">0.0/<i>5</i>&nbsp;<em>(0&nbsp;Feedback)</em></span>
                                            </div>
                                            Member since&nbsp;March 26, 2019                                    
                                            <a href="javascript:;">@ {{$data->name}}  </a> 
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left withstats">
                                <div class="row">
                                   <div class="wt-profile-content-holder">
                                      <div class="wt-proposalhead wt-userdetails">
                                         <h2>{{$data->freelancerProfile->title}}</h2>
                                         <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                            <li><span><i class="fa fa-money"></i>Tk. 10000.00&nbsp;/&nbsp;hr</span></li>
                                            <li>
                                               <span>
                                               <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.png')}}" alt="//amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/img-01-2.png"></em>Bangladesh                                                          </span>
                                            </li>
                                            <li>            <a href="javascript:;" class="wt-clicksave wt-savefreelancer" data-id="351" data-text="Saved"><i class="fa fa-heart" ></i><span>Click to Save</span></a></li>
                                         </ul>
                                         <div class="wt-description">
                                            {{ $data->freelancerProfile->description }}
                                         </div>
                                      </div>
                                      <div id="wt-statistics" class="wt-statistics wt-profilecounter">
                                         <div class="wt-statisticcontent wt-countercolor1">
                                            <h3 >0</h3>
                                            <h4>Ongoing&nbsp;<br>Projects</h4>
                                         </div>
                                         <div class="wt-statisticcontent wt-countercolor2">
                                            <h3>0</h3>
                                            <h4>Completed&nbsp;<br>Projects</h4>
                                         </div>
                                         <div class="wt-statisticcontent wt-countercolor4">
                                            <h3>0</h3>
                                            <h4>Cancelled&nbsp;<br>Projects</h4>
                                         </div>
                                         <div class="wt-statisticcontent wt-countercolor3">
                                            <h3>Tk. 0.00</h3>
                                            <h4>Total&nbsp;<br>Earnings</h4>
                                         </div>
                                         <div class="wt-description">
                                            <p>* Click the button to send an offer</p>
                                            <a class="wt-btn wt-loginfor-offer" href="javascript:;">
                                            Send  Offer                                         </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>


                 
<!-- 
<div class="container">
   <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
         <div class="wt-services-holder">
            <div class="wt-title">
               <h2>Services</h2>
            </div>
            <div class="wt-services-content">
               <div class="row services-wrap">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
                     <div class="wt-freelancers-info  ">
                        <div class="wt-freelancers wt-freelancers-services-691655 owl-carousel owl-loaded owl-drag">
                           <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 990px;">
                                 <div class="owl-item active" style="width: 330px;">
                                    <figure class="item">
                                       <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-19/">
                                       <img src="https://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/06/04-352x200.jpg" alt="Service " class="item">
                                       </a>
                                    </figure>
                                 </div>
                                 <div class="owl-item" style="width: 330px;">
                                    <figure class="item">
                                       <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-19/">
                                       <img src="https://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/06/02-1-352x200.jpg" alt="Service " class="item">
                                       </a>
                                    </figure>
                                 </div>
                                 <div class="owl-item" style="width: 330px;">
                                    <figure class="item">
                                       <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-19/">
                                       <img src="https://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/06/12-352x200.jpg" alt="Service " class="item">
                                       </a>
                                    </figure>
                                 </div>
                              </div>
                           </div>
                           <div class="wt-search-slider-nav">
                              <div class="wt-prev disabled"><span class="lnr lnr-chevron-left"></span></div>
                              <div class="wt-next"><span class="lnr lnr-chevron-right"></span></div>
                           </div>
                           <div class="owl-dots">
                              <div class="owl-dot active"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                           </div>
                        </div>
                        <div class="wt-freelancers-details">
                           <figure class="wt-freelancers-img">
                              <img src="wp-content/uploads/freelancers/2.jpg" alt="Service ">
                              <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                           </figure>
                           <div class="wt-freelancers-content">
                              <div class="dc-title">
                                 <a href="#" class="verification-tags">
                                
                                 Farhana Haq                                </a>
                                 <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-19/">
                                    <h3>I Will Develop Ios And Android Mobile App Using React Native</h3>
                                 </a>
                                 <span>Starting From&nbsp;<strong>Tk. 500.00</strong></span>
                              </div>
                           </div>
                           <div class="wt-freelancers-rating">
                              <ul>
                                 <li><span><i class="fa fa-star"></i>0.0/5 (0)</span></li>
                                 <li><span><i class="fa fa-spinner fa-spin"></i>1&nbsp;in Queue</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
                     <div class="wt-freelancers-info  ">
                        <div class="wt-freelancers wt-freelancers-services-691655 owl-carousel owl-loaded owl-drag">
                           <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 990px;">
                                 <div class="owl-item active" style="width: 330px;">
                                    <figure class="item">
                                       <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-11/">
                                       <img src="https://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/06/02-1-352x200.jpg" alt="Service " class="item">
                                       </a>
                                    </figure>
                                 </div>
                                 <div class="owl-item" style="width: 330px;">
                                    <figure class="item">
                                       <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-11/">
                                       <img src="https://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/06/10-352x200.jpg" alt="Service " class="item">
                                       </a>
                                    </figure>
                                 </div>
                                 <div class="owl-item" style="width: 330px;">
                                    <figure class="item">
                                       <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-11/">
                                       <img src="https://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/06/08-352x200.jpg" alt="Service " class="item">
                                       </a>
                                    </figure>
                                 </div>
                              </div>
                           </div>
                           <div class="wt-search-slider-nav">
                              <div class="wt-prev disabled"><span class="lnr lnr-chevron-left"></span></div>
                              <div class="wt-next"><span class="lnr lnr-chevron-right"></span></div>
                           </div>
                           <div class="owl-dots">
                              <div class="owl-dot active"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                              <div class="owl-dot"><span></span></div>
                           </div>
                        </div>
                        <span class="wt-featuredtagvtwo">Featured</span>
                        <div class="wt-freelancers-details">
                           <figure class="wt-freelancers-img">
                              <img src="wp-content/uploads/freelancers/3.jpg" alt="Service ">
                              <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                           </figure>
                           <div class="wt-freelancers-content">
                              <div class="dc-title">
                                 <a href="https://amentotech.com/projects/wpworkreap/freelancer/christian-edwards/" class="verification-tags">
                                 
                                 Rumana Islam                               </a>
                                 <a href="https://amentotech.com/projects/wpworkreap/service/i-will-create-fix-customize-your-wordpress-website-11/">
                                    <h3>I Will Create, Fix, Customize, Your WordPress Website</h3>
                                 </a>
                                 <span>Starting From&nbsp;<strong>Tk. 1000.00</strong></span>
                              </div>
                           </div>
                           <div class="wt-freelancers-rating">
                              <ul>
                                 <li><span><i class="fa fa-star"></i>0.0/5 (0)</span></li>
                                 <li><span><i class="fa fa-spinner fa-spin"></i>0&nbsp;in Queue</span></li>
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
</div> -->





                 <div class="container">
                    <div class="row">
                       <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                             <div class="wt-usersingle">
                                
                                <div class="wt-craftedprojects">
                                   <div class="wt-usertitle">
                                      <h2>Crafted Projects</h2>
                                   </div>
                                   <div class="wt-projects">
                                      <div class="wt-project wt-crprojects"  >
                                         <figure>
                                            <img src="wp-content/uploads/2019/03/img-01-2.jpg" alt="Themeforest">
                                         </figure>
                                         <div class="wt-projectcontent">
                                            <h3>Themeforest</h3>
                                            <a target="_blank" href="http://www.themeforest.net/">http://www.themeforest.net</a>
                                         </div>
                                      </div>
                                      <div class="wt-project wt-crprojects"  >
                                         <figure>
                                            <img src="wp-content/uploads/2019/03/img-02-2.jpg" alt="Videohive">
                                         </figure>
                                         <div class="wt-projectcontent">
                                            <h3>Videohive</h3>
                                            <a target="_blank" href="http://www.videohive.net/">http://www.Videohive.net</a>
                                         </div>
                                      </div>
                                      <div class="wt-project wt-crprojects"  >
                                         <figure>
                                            <img src="wp-content/uploads/2019/03/img-03-2.jpg" alt="Codecanyon">
                                         </figure>
                                         <div class="wt-projectcontent">
                                            <h3>Codecanyon</h3>
                                            <a target="_blank" href="http://www.codecanyon.com/">http://www.Codecanyon.com</a>
                                         </div>
                                      </div>
                                      <div class="wt-project wt-crprojects"  >
                                         <figure>
                                            <img src="wp-content/uploads/2019/03/img-04.jpg" alt="Graphicriver">
                                         </figure>
                                         <div class="wt-projectcontent">
                                            <h3>Graphicriver</h3>
                                            <a target="_blank" href="http://www.graphicriver.net/">http://www.graphicriver.net</a>
                                         </div>
                                      </div>
                                      <div class="wt-project wt-crprojects"  >
                                         <figure>
                                            <img src="wp-content/uploads/2019/03/img-05-1.jpg" alt="Photodune">
                                         </figure>
                                         <div class="wt-projectcontent">
                                            <h3>Photodune</h3>
                                            <a target="_blank" href="http://www.photodune.net/">http://www.photodune.net</a>
                                         </div>
                                      </div>
                                      <div class="wt-project wt-crprojects"  >
                                         <figure>
                                            <img src="wp-content/uploads/2019/03/img-06.jpg" alt="Audiojungle">
                                         </figure>
                                         <div class="wt-projectcontent">
                                            <h3>Audiojungle</h3>
                                            <a target="_blank" href="http://www.audiojungle.net/">http://www.audiojungle.net</a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="wt-experience items-more-wrap-ex">
                                   <div class="wt-usertitle">
                                      <h2>Experience</h2>
                                   </div>
                                   <div class="wt-experiencelisting-hold data-list">
                                      <div class="wt-experiencelisting wt-bgcolor sp-load-item">
                                         <div class="wt-title">
                                            <h3>Web &amp; Apps Project Manager</h3>
                                         </div>
                                         <div class="wt-experiencecontent">
                                            <ul class="wt-userlisting-breadcrumb">
                                               <li><span><i class="fa fa-building"></i>&nbsp;Amento Tech</span></li>
                                               <li><span><i class="fa fa-calendar"></i>&nbsp;Aug 2018&nbsp;-&nbsp;Till Now</span></li>
                                            </ul>
                                            <div class="wt-description">
                                               <p>
                                               <p>“ Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. ”</p>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="wt-experiencelisting  sp-load-item">
                                         <div class="wt-title">
                                            <h3>Sr. PHP &amp; Laravel Developer</h3>
                                         </div>
                                         <div class="wt-experiencecontent">
                                            <ul class="wt-userlisting-breadcrumb">
                                               <li><span><i class="fa fa-building"></i>&nbsp;Amento Tech</span></li>
                                               <li><span><i class="fa fa-calendar"></i>&nbsp;Jun 2017&nbsp;-&nbsp;Jun 2018</span></li>
                                            </ul>
                                            <div class="wt-description">
                                               <p>
                                               <p>“ Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. ”</p>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="wt-experiencelisting wt-bgcolor sp-load-item">
                                         <div class="wt-title">
                                            <h3>PHP Developer</h3>
                                         </div>
                                         <div class="wt-experiencecontent">
                                            <ul class="wt-userlisting-breadcrumb">
                                               <li><span><i class="fa fa-building"></i>&nbsp; Amento Tech</span></li>
                                               <li><span><i class="fa fa-calendar"></i>&nbsp;Sep 2017&nbsp;-&nbsp;Sep 2016</span></li>
                                            </ul>
                                            <div class="wt-description">
                                               <p>
                                               <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. </p>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="wt-btnarea"><a href="javascript:;" class="wt-btn sp-loadMore">Load More</a></div>
                                      <div class="divheight"></div>
                                   </div>
                                </div>
                                <div class="wt-experience wt-education items-more-wrap-ed">
                                   <div class="wt-usertitle">
                                      <h2>Education</h2>
                                   </div>
                                   <div class="wt-experiencelisting-hold data-list">
                                      <div class="wt-experiencelisting wt-bgcolor sp-load-item">
                                         <div class="wt-title">
                                            <h3>Web &amp; Apps Project Manager</h3>
                                         </div>
                                         <div class="wt-experiencecontent">
                                            <ul class="wt-userlisting-breadcrumb">
                                               <li><span><i class="fa fa-building"></i>&nbsp;Amento Tech</span></li>
                                            </ul>
                                            <div class="wt-description">
                                               <p>
                                               <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="wt-experiencelisting  sp-load-item">
                                         <div class="wt-title">
                                            <h3>Sr. PHP &amp; Laravel Developer</h3>
                                         </div>
                                         <div class="wt-experiencecontent">
                                            <ul class="wt-userlisting-breadcrumb">
                                               <li><span><i class="fa fa-building"></i>&nbsp;Amento Tech</span></li>
                                               <li><span><i class="fa fa-calendar"></i>&nbsp;Apr 2016&nbsp;-&nbsp;Apr 2017</span></li>
                                            </ul>
                                            <div class="wt-description">
                                               <p>
                                               <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="wt-experiencelisting wt-bgcolor sp-load-item">
                                         <div class="wt-title">
                                            <h3>PHP Developer</h3>
                                         </div>
                                         <div class="wt-experiencecontent">
                                            <ul class="wt-userlisting-breadcrumb">
                                               <li><span><i class="fa fa-building"></i>&nbsp;Amento Tech</span></li>
                                               <li><span><i class="fa fa-calendar"></i>&nbsp;Apr 2016&nbsp;-&nbsp;Apr 2017</span></li>
                                            </ul>
                                            <div class="wt-description">
                                               <p>
                                               <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. </p>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="wt-btnarea"><a href="javascript:;" class="wt-btn sp-loadMore">Load More</a></div>
                                      <div class="divheight"></div>
                                   </div>
                                </div>

                                <div class="wt-usersingle">
                               <div class="wt-clientfeedback">
                                  <div class="wt-usertitle wt-titlewithselect">
                                     <h2>Client Feedback</h2>
                                     <div class="form-group">
                                        <span class="wt-select">
                                           <select>
                                              <option value="Show All">Show All</option>
                                              <option value="One Page">One Page </option>
                                              <option value="Two Page">Two Page</option>
                                           </select>
                                        </span>
                                     </div>
                                  </div>
								  
                                  <div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">
                                     <figure class="wt-userlistingimg">
                                        <img src="images/client/img-01.jpg" alt="image description">
                                     </figure>
                                     <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                           <div class="wt-title">
                                              <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Themeforest Company</a>
                                              <h3>Translation and Proof Reading (Multi Language)</h3>
                                           </div>
                                           <ul class="wt-userlisting-breadcrumb">
                                              <li><span><i class="fa fa-dollar-sign"></i> Beginner</span></li>
                                              <li><span><img src="images/flag/img-04.png" alt="img description"> England</span></li>
                                              <li><span><i class="fas fa-spinner fa-spin"></i> In Progress</span></li>
                                           </ul>
                                        </div>
                                     </div>
                                  </div>
                                  
								  <div class="wt-userlistinghold wt-userlistingsingle">
                                     <figure class="wt-userlistingimg">
                                        <img src="images/client/img-02.jpg" alt="image description">
                                     </figure>
                                     <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                           <div class="wt-title">
                                              <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Videohive Studio</a>
                                              <h3>Need help translating app stringlist from English to Arabic</h3>
                                           </div>
                                           <ul class="wt-userlisting-breadcrumb">
                                              <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Intermediate</span></li>
                                              <li><span><img src="images/flag/img-03.png" alt="img description">  Canada</span></li>
                                              <li><span><i class="far fa-calendar"></i> Jun 2017 - Jul 2017</span></li>
                                              <li><span class="wt-stars"><span></span></span></li>
                                           </ul>
                                        </div>
                                     </div>
                                     <div class="wt-description">
                                        <p>“ Eiusmod tempor incididunt ut labore et dolore magna quis nostrud exercitation ullamco laboris. ”</p>
                                     </div>
                                  </div>
                                  <div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">
                                     <figure class="wt-userlistingimg">
                                        <img src="images/client/img-03.jpg" alt="image description">
                                     </figure>
                                     <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                           <div class="wt-title">
                                              <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Photodune Professionals</a>
                                              <h3>Blog Post Writing in English Language</h3>
                                           </div>
                                           <ul class="wt-userlisting-breadcrumb">
                                              <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
                                              <li><span><img src="images/flag/img-02.png" alt="img description"> United States</span></li>
                                              <li><span><i class="far fa-calendar"></i>  Jun 2017</span></li>
                                              <li><span class="wt-stars"><span></span></span></li>
                                           </ul>
                                        </div>
                                     </div>
                                     <div class="wt-description">
                                        <p>“ Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. ”</p>
                                     </div>
                                  </div>
                                  <div class="wt-btnarea">
                                     <a href="javascript:void(0);" class="wt-btn">Load More</a>
                                  </div>
                               </div>
                            </div>
                                
                             </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                             <aside id="wt-sidebar" class="wt-sidebar">
                                <div id="wt-ourskill" class="wt-widget items-more-wrap-sk">
                                   <div class="wt-widgettitle">
                                      <h2>My Skills</h2>
                                   </div>
                                   <div class="wt-widgetcontent wt-skillscontent data-list">
                                   @foreach ($data->skill as $item)
 
                                             <div class="wt-skillholder sp-load-item" data-percent="{{$item->skill_value}}%">
                                             <span>{{$item->skill_name}}<em>{{$item->skill_value}}%</em></span>
                                             <div class="wt-skillbarholder">
                                                <div class="wt-skillbar"></div>
                                             </div>
                                          </div>
                                             
                                       
                                      @endforeach
                                      <div class="wt-btnarea"><a class="sp-loadMore" href="javascript:;">View More</a> </div>
                                   </div>
                                </div>
                                <!-- <div class="wt-widget wt-widgetarticlesholder wt-articlesuser items-more-wrap-aw">
                                   <div class="wt-widgettitle">
                                      <h2>Awards &amp; Certifications</h2>
                                   </div>
                                   <div class="wt-widgetcontent data-list">
                                      <div class="wt-particlehold sp-load-item">
                                         <figure> <img src="wp-content/uploads/2019/03/img-10-1.jpg" alt="certificate"></figure>
                                         <div class="wt-particlecontent">
                                            <h3><a href="javascript:;">Best Logo Design Winner</a></h3>
                                            <span><i class="lnr lnr-calendar"></i>August 21, 2019</span>
                                         </div>
                                      </div>
                                      <div class="wt-particlehold sp-load-item">
                                         <figure> <img src="wp-content/uploads/2019/03/img-09.jpg" alt="certificate"></figure>
                                         <div class="wt-particlecontent">
                                            <h3><a href="javascript:;">Best Communication 2015</a></h3>
                                            <span><i class="lnr lnr-calendar"></i>March 27, 2018</span>
                                         </div>
                                      </div>
                                      <div class="wt-particlehold sp-load-item">
                                         <figure> <img src="wp-content/uploads/2019/03/img-08-1.jpg" alt="certificate"></figure>
                                         <div class="wt-particlecontent">
                                            <h3><a href="javascript:;">Monster Developer Award</a></h3>
                                            <span><i class="lnr lnr-calendar"></i>March 25, 2019</span>
                                         </div>
                                      </div>
                                      <div class="wt-particlehold sp-load-item">
                                         <figure> <img src="wp-content/uploads/2019/03/img-07.jpg" alt="certificate"></figure>
                                         <div class="wt-particlecontent">
                                            <h3><a href="javascript:;">Top PHP Excel Skills</a></h3>
                                            <span><i class="lnr lnr-calendar"></i>March 25, 2019</span>
                                         </div>
                                      </div>
                                      <div class="wt-btnarea"><a href="javascript:;" class="sp-loadMore">Load More</a></div>
                                   </div>
                                </div> -->
                                <!-- <div class="tg-authorcodescan wt-widget wt-widgetcontent">
                                   <div class="tg-qrscan">
                                      <figure class="tg-qrcodeimg">
                                         <img class="tg-qrcodedata" src="wp-content/themes/workreap/images/qrcode.png" alt="QR-Code">
                                         <figcaption>
                                            <a href="javascript:;" class="tg-qrcodedetails" data-type="freelancer" data-key="351">
                                            <span><i class="lnr lnr-redo"></i>load<br>QR code</span>
                                            </a>
                                         </figcaption>
                                      </figure>
                                   </div>
                                   <div class="tg-qrcodedetail">
                                      <span class="lnr lnr-laptop-phone"></span>
                                      <div class="tg-qrcodefeat">
                                         <h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
                                      </div>
                                   </div>
                                </div> -->
                                <!-- <div class="wt-widget">
                                   <div class="wt-widgettitle">
                                      <h2>Similar Freelancers</h2>
                                   </div>
                                   <div class="wt-widgetcontent">
                                      <div class="wt-widgettag wt-widgettagvtwo">
                                         <a href="skill/php/index.html">PHP</a> 
                                         <a href="skill/website-design/index.html">Website Design</a> 
                                         <a href="skill/html-5/index.html">HTML 5</a> 
                                         <a href="skill/graphic-design/index.html">Graphic Design</a> 
                                         <a href="skill/wordpress/index.html">WordPress</a> 
                                         <a href="skill/my-sql/index.html">My SQL</a> 
                                         <a href="skill/content-writing/index.html">Content Writing</a> 
                                         <a href="skill/css/index.html">CSS</a> 
                                         <a href="skill/jquery/index.html">Jquery</a> 
                                      </div>
                                   </div>
                                </div> -->
                                <div class="wt-widget wt-sharejob">
                                   <div class="wt-widgettitle">
                                      <h2>Share This Freelancer</h2>
                                   </div>
                                   <div class='wt-widgetcontent'>
                                      <ul class='wt-socialiconssimple'>
                                         <li class="wt-facebook"><a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Famentotech.com%2Fprojects%2Fwpworkreap%2Ffreelancer%2Fwilson-thomas%2F" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook-f"></i><span>Share on Facebook</span></a></li>
                                         <li class="wt-twitter"><a href="http://twitter.com/intent/tweet?text=Wilson+Thomas&amp;url=http%3A%2F%2Famentotech.com%2Fprojects%2Fwpworkreap%2Ffreelancer%2Fwilson-thomas%2F&amp;via=Workreap"  ><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
                                         <li class="wt-googleplus"><a href="http://plus.google.com/share?url=http://amentotech.com/projects/wpworkreap/freelancer/wilson-thomas/" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i><span>Share on Google</span></a></li>
                                         <li class="wt-pinterestp"><a href="http://pinterest.com/pin/create/button/?url=http://amentotech.com/projects/wpworkreap/freelancer/wilson-thomas/&amp;media=http://amentotech.com/projects/wpworkreap/wp-content/uploads/2019/03/28-1-225x225.jpg&amp;description=Wilson+Thomas" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest-p"></i><span>Share on Pinterest</span></a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="wt-widget wt-reportjob" id="wt-reportuser">
                                   <div class="wt-widgettitle">
                                      <h2>Report this freelancer</h2>
                                   </div>
                                   <div class="wt-widgetcontent">
                                      <form class="wt-formtheme wt-formreport">
                                         <fieldset>
                                            <div class="form-group">
                                               <span class="wt-select">
                                                  <select name="reason">
                                                     <option value="this-is-the-fake">This is the fake</option>
                                                     <option value="other">Other</option>
                                                  </select>
                                               </span>
                                            </div>
                                            <div class="form-group">
                                               <textarea class="form-control" name="description" placeholder="Report description"></textarea>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                               <a href="javascript:;" class="wt-btn wt-report-user" data-id='351' data-type='freelancer'>Submit</a>
                                            </div>
                                            <input type="hidden" id="report_nonce" name="report_nonce" value="c2a32f0857" /><input type="hidden" name="_wp_http_referer" value="/projects/wpworkreap/freelancer/wilson-thomas/" />                  
                                         </fieldset>
                                      </form>
                                   </div>
                                </div>
                             </aside>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           
@endsection