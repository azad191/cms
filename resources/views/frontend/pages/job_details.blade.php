@extends('frontend.components.app')
@section('subBanner')
    <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url('wp-content/uploads/2019/04/tb-1.jpg');">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                <div class="wt-innerbannercontent">
                    <div class="wt-title">
                        <h1>Job Details</h1>
                    </div>
                    <ol class="wt-breadcrumb">
                        <li class="first-item">
                            <a href="../../index.html">Home</a>
                        </li>
                        <li class="0-item">
                            <a href="../../project_cat/business/index.html">Business</a>
                        </li>
                        <li class="last-item">Job detail</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

<div id="wt-demo-sidebar" class="wt-demo-sidebar">

{{--                  <div id="wt-verticalscrollbar-demos" class="wt-verticalscrollbar">--}}
{{--                     <div class="wt-demo-holder">--}}
{{--                        <a target="_blank" href="../../index.html">--}}
{{--                           <figure class="wt-demo-img">--}}
{{--                              <img src="../../wp-content/themes/workreap/images/demo-img/img-01.jpg" alt="demos">--}}
{{--                              <figcaption>--}}
{{--                                 <div class="wt-demo-tags">--}}
{{--                                    <span class="wt-demo-new">New</span>--}}
{{--                                 </div>--}}
{{--                              </figcaption>--}}
{{--                           </figure>--}}
{{--                        </a>--}}
{{--                        <a target="_blank" href="http://amentotech.com/projects/elementor">--}}
{{--                           <figure class="wt-demo-img">--}}
{{--                              <img src="../../wp-content/themes/workreap/images/demo-img/img-02.jpg" alt="demos">--}}
{{--                              <figcaption>--}}
{{--                                 <div class="wt-demo-tags">--}}
{{--                                    <span class="wt-demo-new">Elementor Page Builder</span>--}}
{{--                                    <span class="wt-demo-populor">Popular</span>--}}
{{--                                 </div>--}}
{{--                              </figcaption>--}}
{{--                           </figure>--}}
{{--                        </a>--}}
{{--                        <a href="http://amentotech.com/projects/elementor/home-page-three/">--}}
{{--                           <figure class="wt-demo-img">--}}
{{--                              <img src="../../wp-content/themes/workreap/images/demo-img/img-03.jpg" alt="demos">--}}
{{--                              <figcaption>--}}
{{--                                 <div class="wt-demo-tags">--}}
{{--                                    <span class="wt-demo-populor">New Design</span>--}}
{{--                                 </div>--}}
{{--                              </figcaption>--}}
{{--                           </figure>--}}
{{--                        </a>--}}
{{--                     </div>--}}
{{--                  </div>--}}
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
               <div class="wt-haslayout wt-job-single">
                  <div class="container">
                     <div class="row">
                        <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                              <div class="wt-proposalholder">
                                 <div class="wt-proposalhead">
                                    <h1>{{$getJob->job_title}}</h1>
                                    <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo text-capitalize">
                                       <li><span><i class="fa fa-check-circle wt-viewjobdollar"></i>Level: {{$getJob->project_level}}</span></li>
                                       <!-- fa fa-check-circle wt-viewjobdollar -->
                                       <li>
                                          <span>
                                          <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.png')}}" alt="country"></em>United Emirates															</span>
                                       </li>
                                       <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:{{$getJob->job_type}}</span></li>
                                       <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>{{$getJob->duration}}Month</span></li>
                                    </ul>
                                 </div>
                                 <div class="wt-btnarea"><a href="submit-proposal/indexabe9.html?project_id=181" class="wt-btn wt-submit-proposal">Send Proposal</a></div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 float-left">
                              <div class="wt-projectdetail-holder">
                                 <div class="wt-title">
                                    <h3>Project details</h3>
                                 </div>
                                 <div class="wt-projectdetail">
                                    <div class="wt-description">
                                       {{$getJob->description}}
                                    </div>
                                 </div>
                                 <div class="wt-skillsrequired">
                                    <div class="wt-title">
                                       <h3>Skills Required</h3>
                                    </div>
                                    <div class="wt-tag wt-widgettag">
                                        @php
                                            $postSkill = json_decode($getJob->skills);
                                             $skills = \App\Models\Skill::whereIn('id', $postSkill)->get();
                                        @endphp
                                        @foreach($skills as $skillItem)
                                            <a  class="skills_181" href="">{{$skillItem->name}}</a>
                                        @endforeach
                                    </div>
                                 </div>
                                 <div class="wt-attachmentss">
                                    <div class="wt-title">
                                       <h3>Attachments</h3>
                                    </div>
                                    <ul class="wt-attachfile">
                                       <li>
                                          <label>
                                          <span>WordPress customization</span>
                                          <em>File size:&nbsp;85.84 KB<a href="{{route('job.file.download', $getJob->id)}}"><i class="lnr lnr-download"></i></a></em>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 float-left">
                              <aside id="wt-sidebar" class="wt-sidebar">
                                 <div class="wt-proposalsr">
                                    <div class="wt-proposalsrcontent sproject-price">
                                       <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-money"></i></span>
                                       <div class="wt-title">
                                          <h3>Tk.{{$getJob->price_min}}-{{$getJob->price_max}}</h3>
                                          <span>Client Budget</span>
                                       </div>
                                    </div>
                                    <div class="wt-proposalsrcontent sproject-price">
                                       <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-hourglass-half"></i></span>
                                       <div class="wt-title">
                                          <h3>Expiry Date</h3>

                                          <span>{{date('d.m.Y H:i A', strtotime( $getJob->project_expire))}}</span>
                                       </div>
                                    </div>
                                    <div class="wt-proposalsrcontent">
                                       <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper-o"></i></span>
                                       <div class="wt-title">
                                          <h3>0&nbsp;Proposals</h3>
                                          <span>Received till&nbsp;September 30, 2019</span>
                                       </div>
                                    </div>
                                    <!-- <div class="tg-authorcodescan wt-widget wt-widgetcontent">
                                       <div class="tg-qrscan">
                                          <figure class="tg-qrcodeimg">
                                             <img class="tg-qrcodedata" src="wp-content/themes/workreap/images/qrcode.png" alt="QR-Code">
                                             <figcaption>
                                                <a href="javascript:;" class="tg-qrcodedetails" data-type="project" data-key="181">
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
                                    <div class="wt-clicksavearea">
                                       <span>Project ID:&nbsp;{{$getJob->job_id}}</span>
                                       <span><a href="javascript:;" class="wt-clicksavebtn wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span>
                                    </div>
                                 </div>
                                 <div class="wt-widget">
                                    <div class="wt-companysdetails">
                                       <figure class="wt-companysimg">
                                          <img src="{{asset('backend/uploads/buyer/banner/'.$buyerProfile->buyer_banner_image)}}" alt="employer">
                                       </figure>
                                       <div class="wt-companysinfo">
                                          <figure><img src="{{asset('/backend/uploads/buyer/profile/'.$buyerProfile->buyer_profile_image)}}" alt="employer"></figure>
                                          <div class="wt-title emp-title">
                                             <a href="{{route('buyer_profile', base64_encode($getUser->id))}}">
                                             <i class="fa fa-check-circle"></i>{{$getUser->name}}</a>
                                             <h2><a href="{{route('buyer_profile', base64_encode($getUser->id))}}">Buyer</a></h2>
                                          </div>
                                          <ul class="wt-postarticlemeta">
                                             <li><a href="#"><span>Open Jobs</span></a></li>
                                             <li><a href="{{route('buyer_profile', base64_encode($getUser->id))}}"><span>Full Profile</span></a></li>
                                             <li><a href="javascript:;"  data-type="v2" data-id="304" data-text="Following" class="wt-follow-emp"><span>Follow</span></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wt-widget wt-sharejob">
                                    <div class="wt-widgettitle">
                                       <h2>Share This Project</h2>
                                    </div>
                                    <div class='wt-widgetcontent'>
                                       <ul class='wt-socialiconssimple'>
                                          <li class="wt-facebook"><a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Famentotech.com%2Fprojects%2Fwpworkreap%2Fproject%2Fwildlife-conservation-professor%2F" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook-f"></i><span>Share on Facebook</span></a></li>
                                          <li class="wt-twitter"><a href="http://twitter.com/intent/tweet?text=Wildlife+Conservation+Professor&amp;url=http%3A%2F%2Famentotech.com%2Fprojects%2Fwpworkreap%2Fproject%2Fwildlife-conservation-professor%2F&amp;via=Workreap"  ><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
                                          <li class="wt-googleplus"><a href="http://plus.google.com/share?url=http://amentotech.com/projects/wpworkreap/project/wildlife-conservation-professor/" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i><span>Share on Google</span></a></li>
                                          <li class="wt-pinterestp"><a href="http://pinterest.com/pin/create/button/?url=http://amentotech.com/projects/wpworkreap/project/wildlife-conservation-professor/&amp;media=http://amentotech.com/projects/wpworkreap/wp-content/themes/workreap/images/emavatar-100x100.jpg&amp;description=Wildlife+Conservation+Professor" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest-p"></i><span>Share on Pinterest</span></a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="wt-widget wt-reportjob" id="wt-reportuser">
                                    <div class="wt-widgettitle">
                                       <h2>Report this project</h2>
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
                                                <a href="javascript:;" class="wt-btn wt-report-user" data-id='181' data-type='project'>Submit</a>
                                             </div>
                                             <input type="hidden" id="report_nonce" name="report_nonce" value="c2a32f0857" /><input type="hidden" name="_wp_http_referer" value="/projects/wpworkreap/project/wildlife-conservation-professor/" />
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
               <style>
    .wt-proposalsrcontent .wt-title h3 {
        font-size: 20px;
        color: #2ecc71;
        margin: 0;
        line-height: 1.3em;
        word-break: break-word;
    }
    .wt-proposalsicon i {
        display: block;
        line-height: 30px;
        text-align: center;
    }
    .wt-projectdetail-holder{
        margin-bottom: 30px;
    }
</style>

@endsection
