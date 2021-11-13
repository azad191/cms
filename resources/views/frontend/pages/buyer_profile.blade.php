@extends('frontend.components.app')
@section('subBanner')
    <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url('wp-content/uploads/2019/04/tb-1.jpg');">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h1>Search Projects</h1>
                        </div>
                        <ol class="wt-breadcrumb">
                            <li class="first-item">
                                <a href="../index.html">Home</a>
                            </li>
                            <li class="last-item">Search Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')

    <main id="wt-main" class="wt-main wt-haslayout">
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
                                    <div class="wt-proposalsr wt-proposalsrvtwo">
                                        <div class="wt-widgetcontent wt-companysinfo">
                                            <figure>
                                                <img src="{{asset('backend/uploads/buyer/profile/'.$data->buyerProfile->buyer_profile_image)}}" alt="employer">
                                                <div class="wt-userdropdown wt-away template-content tipso_style wt-tipso" data-tipso="Offline"></div>
                                            </figure>
                                            <div class="wt-title">
                                                <img class="tipso_style wt-tipso verificationtags-img" data-tipso="Email Verified" alt="Email Verified" src="https://instantkaj.com/wp-content/themes/workreap/images/email_verified_color.svg">
                                                <a href="https://instantkaj.com/employer/faiaz-khan/" class="verification-tags">{{$data->name}}</a>
                                                <h2>Employer</h2>
                                            </div>
                                        </div>

                                        <div class="wt-clicksavearea">
                                            <span>Company ID:&nbsp; 00002206</span>
                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);" class="wt-clicksavebtn wt-follow-emp" data-type="v1" data-id="2206" data-text="Following"><i class="fa fa-heart"></i>&nbsp;<span>Click to follow</span></a>
                                        </div>
                                    </div>
                                    <div class="wt-widget">
                                        <div class="wt-widgettitle">
                                            <h2>Company Followers</h2>
                                        </div>
                                        <div class="wt-widgetcontent wt-comfollowers wt-verticalscrollbar mCustomScrollbar _mCS_1">
                                            <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <ul>
                                                        <li>
                                                            <a href="https://instantkaj.com/freelancer/shakil-shoroar/">
                                                                <span><img src="https://instantkaj.com/wp-content/uploads/2021/03/IMG_9428-01-1-100x100.jpeg" alt="Follower" class="mCS_img_loaded"></span>
                                                                <span>Rokon.007</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instantkaj.com/employer/maria-hasin-2/">
                                                                <span><img src="https://instantkaj.com/wp-content/uploads/2021/03/IMG_20201226_165950-100x100.jpg" alt="Follower" class="mCS_img_loaded"></span>
                                                                <span>Maria Hasin</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 71px; max-height: 60.5px;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                            <div class="mCSB_draggerRail"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                                <div class="wt-userlistingholder wt-haslayout">
                                    @foreach($jobPost as $item)
                                    <div class="wt-userlistinghold  wt-userlistingholdvtwo">
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="#">
                                                        <i class="fa fa-check-circle"></i>&nbsp;{{$data->name}}</a>
                                                    <h2><a href="">{{ $item->job_title}}</a></h2>
                                                </div>
                                                <div class="wt-description">
                                                    <p class="text-justify">{!! substr( $item->description, 0, 200)!!} &hellip;</p>
                                                </div>
                                                <div class="wt-tag wt-widgettag">
                                                    @php
                                                        $postSkill = json_decode($item->skills);
                                                        $skills = \App\Models\Skill::whereIn('id', $postSkill)->get();
                                                    @endphp
                                                    @foreach($skills as $skillItem)
                                                        <a  class="skills_181" href="">{{$skillItem->name}}</a>
                                                    @endforeach
                                                </div>
                                            </div>


                                            <div class="wt-viewjobholder">
                                                <ul>
                                                    <li class="text-capitalize"><span><i class="fa fa-dollar wt-viewjobdollar"></i>{{$item->project_level}} Level</span></li>
                                                    <li>
                                                        <span>
                                                            <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.png')}}" alt="Country Image"></em>Bangladesh
                                                        </span>
                                                    </li>
                                                    <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:{{$item->job_type}}</span></li>
                                                    <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>{{$item->duration}} month</span></li>
                                                    @php
                                                        $today = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                                                    @endphp
                                                    <li data-tipso="Job Expiry Date" class="tipso_style wt-tipso"><span><i class="fa fa-hourglass-half wt-viewjobclock"></i>{{$today->format('j, M Y, g:i a') < \Carbon\Carbon::parse($item->project_expire)->format('j, M Y, g:i a')?\Carbon\Carbon::parse($item->project_expire)->format('j, M Y, g:i a'):'Expired'}}</span></li>
                                                    <li><span class=""><i class="fa fa-money wt-viewjobtag"></i>Budget:&nbsp;<b> &#36;{{$item->price_min.'-'.$item->price_max}}</b></span></li>
                                                    <li>                <span><a href="javascript:;" class="wt-clicklike wt-add-to-saved_projects" data-id="181"><i class="fa fa-heart"></i><em>Click to save</em></a></span></li>
                                                    <li class="wt-btnarea"><a href="{{route('job.details', base64_encode($item->id) )}}" class="wt-btn">View Job</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                    <div class='wt-paginationvtwo'>
                                        <nav class="wt-pagination">
                                        {{ $jobPost->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
