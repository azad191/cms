@extends('frontend.components.app')
@section('subBanner')
    <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url('{{url('frontend/wp-content/uploads/2019/04/tb-1.jpg')}}');">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h1> {{isset($type) ? 'Your Filter Job List':'Job List'}}</h1>
                        </div>
                        <ol class="wt-breadcrumb">
                            <li class="first-item">
                                <a href="">Home</a>
                            </li>
                            <li class="last-item">Search Job</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

<div id="wt-demo-sidebar" class="wt-demo-sidebar">

            
                  
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
                                          <form  action="{{route('job.filter')}}" method="post">
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
                                             <div class="wt-widget wt-startsearch ">
                                                <div class="wt-widgettitle">
                                                   <h2>Start Your Search</h2>
                                                   <a href="javascript:;" class="dc-docsearch"><span class="dc-advanceicon"><i></i> <i></i> <i></i></span><span>Advanced <br>Search</span></a>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                   <div class="wt-formtheme wt-formsearch">
                                                      <fieldset>
                                                         <!-- <div class="form-group">
                                                            <input type="text" name="keyword" value="" class="form-control" placeholder="Type keyword">
                                                            <button class="wt-searchgbtn" type="submit"><i class="fa fa-filter"></i></button>
                                                         </div> -->
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
                                                         @foreach ($cats as $key => $item)
                                                         <span class='wt-checkbox loclevel-0'><input name='category[]' type='checkbox' id=term-{{$key}} class="loclevel-0" value="{{$item->id}}"><label for="term-{{$key}}">{{$item->name}}</label>

                                                      </span>
                                                         @endforeach
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
                                                            @foreach ($div as $key => $item)
                                                            <span class='wt-checkbox loclevel-0'>
                                                               <input name='location[]' type='checkbox' id=loc-{{$key}}  class="loclevel-0" value="{{$item->name}}">
                                                               <label for="loc-{{$key}}">
                                                               {{$item->name}}
                                                               </label>
                                                            </span>

                                                            @endforeach
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
                                                            @foreach ($skills as $key => $item)
                                                               <span class="wt-checkbox">
                                                               <input id="skill-{{$key}}" type="checkbox" name="skills[]" value="{{$item->id}}">
                                                               <label for="skill-{{$key}}">{{$item->name}}</label>
                                                               </span>
                                                            @endforeach
                                                         </div>
                                                      </fieldset>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- <div class="wt-widget wt-effectiveholder">
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
                                             </div> -->
                                             <div class="wt-widget wt-effectiveholder">
                                                <div class="wt-widgettitle">
                                                   <h2>Freelancer Type</h2>
                                                </div>
                                                <div class="wt-widgetcontent">
                                                   <div class="wt-formtheme wt-formsearch">
                                                      <fieldset>
                                                         <div class="wt-checkboxholder wt-filterscroll">
                                                            <span class="wt-checkbox">
                                                            <input id="freelancerindependent" type="checkbox" name="type[]" value="Independent Freelancers" >
                                                            <label for="freelancerindependent">Independent Freelancers</label>
                                                            </span>
                                                            <span class="wt-checkbox">
                                                            <input id="freelanceragency" type="checkbox" name="type[]" value="Agency Freelancers" >
                                                            <label for="freelanceragency">Agency Freelancers</label>
                                                            </span>
                                                            <span class="wt-checkbox">
                                                            <input id="freelancerrising_talent" type="checkbox" name="type[]" value="New Rising Talent">
                                                            <label for="freelancerrising_talent">New Rising Talent</label>
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


                              @php
                                 $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                              @endphp
                              <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                                 <div class="wt-userlistingholder wt-haslayout">
                                    @if(isset($type))
                                    @foreach ($data  as $item)
                                       <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="{{route('job.details', base64_encode($item->id))}}">
                                                <i class="fa fa-check-circle"></i>{{$item->user->name}}</a>
                                                <h2><a href="{{route('job.details', base64_encode($item->id))}}">{{$item->job_title}}</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p class="text-justify">{{substr($item->description, 0,300).'....'}}</p>
                                             </div>
                                             <div class="wt-tag wt-widgettag">
                                                 @php
                                                     $postSkill = json_decode($item->skills);
                                                      $skills = \App\Models\Skill::whereIn('id', $postSkill)->get();
                                                 @endphp
                                                @foreach($skills as $skillItem)
                                                <a  class="skills_181 text-capitalize" href="">{{$skillItem->name}}</a>
                                                 @endforeach
                                             </div>
                                          </div>
                                          <div class="wt-viewjobholder">
                                             <ul>
                                                <li><span class="text-capitalize"><i class="fa fa-check-circle wt-viewjobdollar"></i>{{$item->project_level}}</span></li>
                                                <li>
                                                   <span>
                                                   <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.pn')}}g" alt=""></em>
                                                   Bangladesh
                                                </span>
                                                </li>
                                                <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:{{$item->price}}</span></li>
                                                <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>Less than a month</span></li>

                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>{{\Carbon\Carbon::parse($item->project_expire)->format('M,d,Y, g:i a') > $dt->format('M,d,Y, g:i a')  ? \Carbon\Carbon::parse($item->project_expire)->format('M,d,Y, g:i a'): 'Expired' }}</span></li>
                                                <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.70000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="{{route('job.details', base64_encode($item->id) )}}" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>


                                    @endforeach
                                    @else
                                    @foreach ($data as $item)
                                       @foreach ($item->jobPost as $jobItem)
                                       <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                       <div class="wt-userlistingcontent">
                                          <div class="wt-contenthead">
                                             <div class="wt-title">
                                                <a href="{{route('job.details', base64_encode($jobItem->id))}}">
                                                <i class="fa fa-check-circle"></i>{{$item->name}}</a>
                                                <h2><a href="{{route('job.details', base64_encode($jobItem->id))}}">{{$jobItem->job_title}}</a></h2>
                                             </div>
                                             <div class="wt-description">
                                                <p class="text-justify">{{substr($jobItem->description, 0,300)}}</p>
                                             </div>
                                             <div class="wt-tag wt-widgettag">
                                                 @php
                                                     $postSkill = json_decode($jobItem->skills);
                                                      $skills = \App\Models\Skill::whereIn('id', $postSkill)->get();
                                                 @endphp
                                                @foreach($skills as $skillItem)
                                                <a  class="skills_181 text-capitalize" href="">{{$skillItem->name}}</a>
                                                 @endforeach
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
                                                <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>{{\Carbon\Carbon::parse($jobItem->project_expire)->format('M,d,Y, g:i a') > $dt->format('M,d,Y, g:i a')  ? \Carbon\Carbon::parse($jobItem->project_expire)->format('M,d,Y, g:i a'): 'Expired' }}</span></li>
                                                <li><span class="wt-budget"><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<em>Tk.70000.00</em></span></li>
                                                <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span>               </li>
                                                <li class="wt-btnarea"><a href="{{route('job.details', base64_encode($jobItem->id) )}}" class="wt-btn">View Job</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                       @endforeach

                                    @endforeach
                                    @endif







                                    <div class='wt-paginationvtwo'>

                                       <nav class="wt-pagination">
                                          <!-- <ul>
                                             <li class="wt-active"><a href='javascript:;'>1</a></li>
                                             <li><a href='page/2/index.html' class="inactive">2</a></li>
                                             <li><a href='page/3/index.html' class="inactive">3</a></li>
                                             <li class='wt-nextpage'><a href="page/2/index.html"><i class="lnr lnr-chevron-right"></i></a></li>
                                          </ul> -->
                                       {{$data->links()}}
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
