@extends('frontend.components.app')
@section('subBanner')
    <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url({{url('frontend/wp-content/uploads/2019/04/tb-1.jpg')}});">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h1>Registration</h1>
                        </div>
                        <ol class="wt-breadcrumb">
                            <li class="first-item">
                                <a href="../index.html">Home</a>
                            </li>
                            <li class="last-item">Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="container">
        <div class="wt-haslayout wt-haslayout page-data">
            <div class="main-page-wrapper">
                <div class="fw-page-builder-content">
                    <section  class="wt-main-section wt-haslayout  default wt-elm-section"    >
                        <div class="builder-items row">
                            <div class="col-xs-12 col-md-12 builder-column " >
                                <div class="wt-sc-shortcode wt-haslayout">
                                    <div class="tg-content">
                                        <div class="tg-themeform tg-formlogin-register">
                                            <div class="wt-haslayout wt-sectionspace">
                                                <div class="container">
                                                    <div class="row justify-content-md-center">
                                                        <div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
                                                            <div class="wt-registerformhold">
                                                                <div class="tab-content wt-registertabcontent">
                                                                    <div class="tab-pane active step-one-contents" id="one">
                                                                        <div class="wt-registerformmain">
                                                                            <div class="wt-registerhead">
                                                                                <div class="wt-title">
                                                                                    <h3>Join For a Good Start</h3>
                                                                                </div>
                                                                                <div class="description">
                                                                                    Consectetur adipisicing elit sed dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina
                                                                                </div>
                                                                            </div>
                                                                            <div class="wt-joinforms">

                                                                                <form class="wt-formtheme wt-formregister">
                                                                                    <fieldset class="wt-registerformgroup">
                                                                                        <div class="form-group wt-form-group-dropdown form-group-half">
                                                                              <span class="wt-select">
                                                                                 <select name="gender">
                                                                                    <option value="male">mr.</option>
                                                                                    <option value="female">mrs</option>
                                                                                 </select>
                                                                              </span>
                                                                                            <input type="text" name="first_name" class="form-control" value="" placeholder="First Name">
                                                                                        </div>
                                                                                        <div class="form-group form-group-half">
                                                                                            <input type="text" name="last_name" value="" class="form-control" placeholder="Last Name">
                                                                                        </div>
                                                                                        <div class="form-group form-group-half">
                                                                                            <input type="text" name="username" class="form-control" value="" placeholder="username">
                                                                                        </div>
                                                                                        <div class="form-group form-group-half">
                                                                                            <input type="email" name="email" class="form-control" value="" placeholder="Email">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <select name="location" id="location-dp" class="item-location-dpss chosen-select" style="display: none;">
                                                                                                <option value="0">Select Location</option>
                                                                                                <option style="" class=" level-0" value="barisal">Barisal</option>
                                                                                                <option style="" class=" level-0" value="chittagong">Chittagong</option>
                                                                                                <option style="" class=" level-0" value="dhaka">Dhaka</option>
                                                                                                <option style="" class=" level-0" value="khulna">Khulna</option>
                                                                                                <option style="" class=" level-0" value="mymensingh">Mymensingh</option>
                                                                                                <option style="" class=" level-0" value="rajshahi">Rajshahi</option>
                                                                                                <option style="" class=" level-0" value="rangpur">Rangpur</option>
                                                                                                <option style="" class=" level-0" value="sylhet">Sylhet</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group form-group-half">
                                                                                            <input type="password" name="password" class="form-control" placeholder="Password*">
                                                                                        </div>
                                                                                        <div class="form-group form-group-half">
                                                                                            <input type="password" name="verify_password" class="form-control" placeholder="Retype Password*">
                                                                                        </div>
                                                                                        <fieldset class="wt-formregisterstart" style="">
                                                                                            <div class="wt-title wt-formtitle">
                                                                                                <h4>Start as :</h4>
                                                                                            </div>
                                                                                            <ul class="wt-accordionhold wt-formaccordionhold accordion">
                                                                                                <li>
                                                                                                    <div class="wt-accordiontitle wt-ragister-option">
                                                                                       <span class="wt-radio">
                                                                                       <input id="wt-freelancer" class="register-radio" type="radio" name="user_type" value="freelancer" checked="checked">
                                                                                       <label for="wt-freelancer">Freelancer<span> (Signup as freelancer &amp; get hired)</span></label>
                                                                                       </span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <div class="wt-accordiontitle wt-ragister-option">
                                                                                       <span class="wt-radio">
                                                                                       <input id="wt-company" class="register-radio" type="radio" name="user_type" value="employer">
                                                                                       <label for="wt-company">Employer <span> (Signup as company/service seeker &amp; post jobs)</span></label>
                                                                                       </span>
                                                                                                    </div>
                                                                                                    <div class="wt-accordiondetails wt-emp-register">
                                                                                                        <div class="wt-radioboxholder">
                                                                                                            <div class="wt-title">
                                                                                                                <h4>Your Department?</h4>
                                                                                                            </div>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department1" checked="checked" type="radio" name="department" value="57">
                                                                                          <label for="wt-department1">Accounting and Finance</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department2" type="radio" name="department" value="59">
                                                                                          <label for="wt-department2">Customer Service Or Operations</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department3" type="radio" name="department" value="60">
                                                                                          <label for="wt-department3">Engineering Or Product Management</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department4" type="radio" name="department" value="56">
                                                                                          <label for="wt-department4">Human Resource Management</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department5" type="radio" name="department" value="55">
                                                                                          <label for="wt-department5">Marketing</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department6" type="radio" name="department" value="311">
                                                                                          <label for="wt-department6">None</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department7" type="radio" name="department" value="310">
                                                                                          <label for="wt-department7">Personal</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department8" type="radio" name="department" value="52">
                                                                                          <label for="wt-department8">Production</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department9" type="radio" name="department" value="54">
                                                                                          <label for="wt-department9">Purchasing</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department10" type="radio" name="department" value="53">
                                                                                          <label for="wt-department10">Research and Development</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-department11" type="radio" name="department" value="61">
                                                                                          <label for="wt-department11">Sales</label>
                                                                                          </span>
                                                                                                        </div>
                                                                                                        <div class="wt-radioboxholder">
                                                                                                            <div class="wt-title">
                                                                                                                <h4>No. of employees you have</h4>
                                                                                                            </div>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-just1" checked="checked" type="radio" name="employees" value="1">
                                                                                          <label for="wt-just1">Its Just Me</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-just2" type="radio" name="employees" value="10">
                                                                                          <label for="wt-just2">2 - 9 Employees</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-just3" type="radio" name="employees" value="100">
                                                                                          <label for="wt-just3">10 - 99 Employees</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-just4" type="radio" name="employees" value="500">
                                                                                          <label for="wt-just4">100 - 499 Employees</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-just5" type="radio" name="employees" value="1000">
                                                                                          <label for="wt-just5">500 - 1000 Employees</label>
                                                                                          </span>
                                                                                                            <span class="wt-radio">
                                                                                          <input id="wt-just6" type="radio" name="employees" value="5000">
                                                                                          <label for="wt-just6">More Than 1000 Employees</label>
                                                                                          </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </fieldset>
                                                                                        <fieldset class="wt-termsconditions">
                                                                                            <div class="wt-checkboxholder">
                                                                                 <span class="wt-checkbox">
                                                                                 <input id="termsconditions" type="checkbox" name="termsconditions" value="checked">
                                                                                 <label for="termsconditions">I accept the terms and policies                                                                            <a target="_blank" href="https://instantkaj.com/terms-and-conditions/">Terms &amp; Conditions</a>
                                                                                 </label>
                                                                                 </span>

                                                                                                <a href="#" onclick="event_preventDefault(event);" class="wt-btn wt-model-reg2">Submit</a>
                                                                                            </div>
                                                                                        </fieldset>

                                                                                    </fieldset>
                                                                                    <input type="hidden" id="workreap_register_step_one_nounce" name="workreap_register_step_one_nounce" value="6d928633d1" /><input type="hidden" name="_wp_http_referer" value="/projects/wpworkreap/authentication/" />
                                                                                </form>
                                                                                <div class="wt-joinnowholder">
                                                                                    <div class="wt-title">
                                                                                        <h4>Join Now With</h4>
                                                                                    </div>
                                                                                    <div class="wt-description">
                                                                                        <p>Use a social account for faster login or easy registration to directly get in to your account</p>
                                                                                    </div>
                                                                                    <ul class="wt-socialicons wt-iconwithtext">
                                                                                        <li class="wt-googleplus"><a class="sp-googl-connect" href="javascript:;"><i class="fa fa-google-plus"></i><em>Google</em></a></li>
                                                                                        <li class="wt-facebook"><a class="sp-fb-connect" href="javascript:;"><i class="fa fa-facebook-f"></i><em>Facebook</em></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wt-registerformfooter">
                                                                    <span>Already Have an Account?&nbsp;<a class="wt-loginfor-offer wt-loginbtn register-loginpop" href="javascript:;">Login Now</a></span>
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
                </div>
            </div>
        </div>
    </div>

@endsection
