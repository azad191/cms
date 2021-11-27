<header id="wt-header" class="wt-header wt-haslayout workreap-header-v1 wt-search-not">
    <div class="wt-navigationarea">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="wt-logo">
                        <a href="index.html">
                            <img src="{{asset('frontend/wp-content/themes/workreap/images/logo.png')}}" alt="Women Empower">
                        </a>
                    </strong>
                    <div class="wt-rightarea float-right">
                        <nav id="wt-nav" class="wt-nav navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="lnr lnr-menu"></i>
                            </button>
                            <div class="collapse navbar-collapse wt-navigation" id="navbarNav">
                                <ul id="menu-main-menu" class="navbar-nav nav-Js">

                                    <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="{{route('job.list')}}" >Find Jobs </a></li>
                                    <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="{{route('freelancer.list')}}" >Find Freelancers</a></li>
                                    <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="{{route('user.reg')}}" >Freelancer Registration</a></li>

                                    <li id="menu-item-1196" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-1196">
                                    <a href="#">More</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280"><a href="https://instantkaj.com/about/">About</a></li>
                                        <li id="menu-item-2293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2293"><a href="https://instantkaj.com/how-it-works/">How it works</a></li>
                                        <li id="menu-item-9393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9393"><a href="https://instantkaj.com/career/">Career</a></li>
                                        <li id="menu-item-2168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2168"><a title="Termsandconditions" href="https://instantkaj.com/terms-and-conditions/">Terms and Conditions</a></li>
                                        <li id="menu-item-2190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-2190"><a href="https://instantkaj.com/privacy-policy/">Privacy Policy</a></li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <!-- ---------------------------------------------------------------------------- -->


@if (isset(auth()->user()->id))
<div class="wt-userlogedin sp-top-menu menu-item-has-children">
    <div class="avatar-wrap-icon">
   <figure class="wt-userimg">
      <img src="{{asset('frontend/wp-content/themes/workreap/images/user.png')}}">
   </figure>
   <div class="wt-username">
      <h3>{{auth()->user()->name}}</h3>
   </div>
   <nav class="wt-usernav">
      <ul class="dashboard-menu-top">
         <li class="toolip-wrapo wt-active">
            <a href="{{auth()->user()->role_id==2 ? route('buyer.dashboard'):route('freelancer.dashboard')}}">
            <i class="ti-dashboard"></i>
            <span>Dashboard</span>
            </a>
         </li>
         <li class="toolip-wrapo ">
            <a href="#">
            <i class="ti-email"></i>
            <span>
            Inbox <em class="wtunread-count">
            0 </em>
            </span>
            </a>
         </li>
         <li class="toolip-wrapo">
            <a href="{{route('buyer.profile.view', auth()->user()->id)}}">
            <i class="ti-desktop"></i>
            <span>View my profile</span>
            </a>
         </li>
         <li class="toolip-wrapo ">
            <a href="#">
            <i class="ti-check-box"></i>
            <span>Identity verification</span>
            <!-- <em class="wtunread-count wtidentity-verified ti-close"></em> -->
            </a>
         </li>
         <li class="menu-item-has-children toolip-wrapo ">
            <span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">
            <i class="ti-settings"></i>
            <span>Settings</span>
            </a>

            <ul class="sub-menu">
               <li class="toolip-wrapo ">
                  <a href="{{route('buyer.profile.view', auth()->user()->id)}}">
                  <span>Edit my profile</span>
                  </a>
               </li>
               <li class="toolip-wrapo ">
                  <a href="#">
                  <span>Payouts settings</span>
                  <span class="wt-element-hint"><i data-tipso-title="" data-tipso="Bkash Number" class="fa fa-question-circle template-content tipso_style wt-tipso"></i></span>
                  </a>
               </li>
               <li class="toolip-wrapo ">
                  <a href="#">
                  <span>Account settings</span>
                  </a>
               </li>
            </ul>
         </li>

         <li class="menu-item-has-children toolip-wrapo ">
            <span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">
            <i class="ti-pencil-alt"></i>
            <span>Manage portfolios</span>
            </a>
            <ul class="sub-menu">
               <li class="">
                  <hr>
                  <a href="#">Add portfolio</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Portfolio listings</a>
               </li>
            </ul>
         </li>
         <li class="menu-item-has-children toolip-wrapo ">
            <span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">
            <i class="ti-bag"></i>
            <span>Manage Jobs</span>
            </a>
            <ul class="sub-menu">
               <li class="">
                  <hr>
                  <a href="{{route('buyer.job.post')}}">Post a Job</a>
               </li>
               <li class="">
                  <hr>
                  <a href="{{route('buyer.all.job.post', base64_encode(auth()->user()->id))}}">Posted Job</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Applied Job</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Ongoing Job</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Completed Job</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Cancelled Job</a>
               </li>
            </ul>
         </li>
         @if (auth()->user()->role_id == 3)
         <li class="menu-item-has-children toolip-wrapo ">
            <span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">
            <i class="ti-bag"></i>
            <span>Manage projects</span>
            </a>
            <ul class="sub-menu">
               <li class="">
                  <hr>
                  <a href="{{route('freelancer.proposal')}}">Proposals</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Ongoing projects</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Completed projects</a>
               </li>
               <li class="">
                  <hr>
                  <a href="#">Cancelled projects</a>
               </li>
            </ul>
         </li>
         @endif

         <li class="toolip-wrapo ">
            <a href="{{route('buyer.show.wishlist', base64_encode(auth()->user()->id))}}">
            <i class="ti-heart"></i>
            <span>Saved items</span>
            </a>
         </li>
         <li class="toolip-wrapo ">
            <a href="#">
            <i class="ti-file"></i>
            <span>Invoices</span>
            </a>
         </li>
         <li class="">
            <a href="#">
            <i class="ti-shield"></i>
            <span>Disputes</span>
            </a>
         </li>
         <li class="toolip-wrapo ">
            <a href="#">
            <i class="ti-tag"></i>
            <span>Help and support</span>
            </a>
         </li>
         <li class="toolip-wrapo"><a href="{{ route('logout') }}"
             onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"><i class="ti-shift-right"></i> <span>Logout</span></a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </ul>
   </nav>
</div>
</div>
 @else

    <div class="wt-loginarea">
        <figure class="wt-userimg">
            <img src="{{asset('frontend/wp-content/themes/workreap/images/user.png')}}" alt="user">
        </figure>
        <div class="wt-loginoption">
            <a href="javascript:;" id="wt-loginbtn" class="wt-loginbtn">Sign In</a>

            <div class="wt-loginformhold">
                <div class="wt-loginheader">
                    <span>Login </span>
                    <a href="javascript:;"><i class="fa fa-times"></i></a>
                </div>
                <form class="wt-formtheme wt-loginform do-login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Username or email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="wt-logininfo">
                            {{--                                                <input type="submit" value="Login">--}}
                            <button type="submt" class="wt-btn" >Login</button>
                            <span class="wt-checkbox">
                        <input id="wt-login" type="checkbox" name="rememberme">
                        <label for="wt-login">Keep me logged in</label>
                        </span>
                        </div>
                        <input type="hidden" id="login_request" name="login_request" value="b6bde0546d" /><input type="hidden" name="_wp_http_referer" value="/projects/wpworkreap/" />								<input type="hidden" name="redirect" value="">
                    </fieldset>
                    <div class="wt-joinnowholder">
                        <ul class="wt-socialicons wt-iconwithtext">
                            <li class="wt-facebook"><a class="sp-fb-connect" href="javascript:;"><i class="fa fa-facebook-f"></i><em>Facebook</em></a></li>
                            <li class="wt-googleplus"><a class="sp-googl-connect" href="javascript:;"><i class="fa fa-google-plus"></i><em>Google</em></a></li>
                        </ul>
                    </div>
                    <div class="wt-loginfooterinfo">
                        <a href="javascript:;" class="wt-forgot-password">Forgot password?</a>
                        <a href="authentication/index0c17.html?step=1">Create account</a>
                    </div>
                </form>
                <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
                    <fieldset>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control get_password" placeholder="Email">
                        </div>
                        <div class="wt-logininfo">
                            <a href="javascript:;" class="wt-btn do-get-password">Get Password</a>
                        </div>
                    </fieldset>
                    <input type="hidden" name="wt_pwd_nonce" value="2378278024" />
                    <div class="wt-loginfooterinfo">
                        <a href="javascript:;" >Login Now</a>
                        <a href="authentication/index0c17.html?step=1">Create account</a>
                    </div>
                </form>
            </div>
        </div>

        <!--<a href="authentication/index0c17.html?step=1"  class="wt-btn">Join Now</a>-->
    <!-- <a href="{{route('buyer.job.post')}}"  class="wt-btn">Post Your Job</a> -->

    </div>
@endif
<!-- --------------------------------------------------- -->

                        <div class="wt-respsonsive-search"><a href="javascript:;" class="wt-searchbtn"><i class="fa fa-search" aria-hidden="true"></i>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
