@extends('frontend.components.app')
@section('subBanner')
    <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url('{{url('frontend/wp-content/uploads/2019/04/tb-1.jpg')}}');">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title">
                            <h1>Send Proposal</h1>
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
<main id="wt-main" class="wt-main wt-haslayout">
               <div id="wt-demo-sidebar" class="wt-demo-sidebar">

                  <div id="wt-verticalscrollbar-demos" class="wt-verticalscrollbar">
                     <div class="wt-demo-holder">
                        <a target="_blank" href="../index.html">
                           <figure class="wt-demo-img">
                              <img src="wp-content/themes/workreap/images/demo-img/img-01.jpg" alt="demos">
                              <figcaption>
                                 <div class="wt-demo-tags">
                                    <span class="wt-demo-new">New</span>
                                 </div>
                              </figcaption>
                           </figure>
                        </a>
                        <a target="_blank" href="#">
                           <figure class="wt-demo-img">
                              <img src="wp-content/themes/workreap/images/demo-img/img-02.jpg" alt="demos">
                              <figcaption>
                                 <div class="wt-demo-tags">
                                    <span class="wt-demo-new">Elementor Page Builder</span>
                                    <span class="wt-demo-populor">Popular</span>
                                 </div>
                              </figcaption>
                           </figure>
                        </a>
                        <a href="#">
                           <figure class="wt-demo-img">
                              <img src="wp-content/themes/workreap/images/demo-img/img-03.jpg" alt="demos">
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
                           <a target="_blank" href="#" class="wt-demo-btn">Buy Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wt-haslayout wt-proposal-single">
                  <div class="container">
                     <div class="row justify-content-md-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2 pb-5">
                           <div class="wt-proposalholder">
                              <div class="wt-proposalhead">
                                 <h2>{{$data->job_title}}</h2>

                                 <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                    <li><span><i class="fa fa-dollar wt-viewjobdollar"></i>{{$data->project_level}} Level</span></li>
                                    <li>
                                       <span>
                                       <em><img class="wt-checkflag" src="{{asset('frontend/wp-content/uploads/2019/03/img-05-1.png')}}" alt="flag"></em>Bangladesh
                                       </span>
                                    </li>
                                    <li><span><i class="fa fa-folder wt-viewjobfolder"></i>Type:Fixed</span></li>
                                    <li><span><i class="fa fa-clock-o wt-viewjobclock"></i>More than {{$data->duration}} months</span></li>
                                 </ul>
                              </div>
                           </div>
                           <form action="{{route('freelancer.send.proposal', [base64_encode(auth()->user()->id), base64_encode($data->id)])}}" method="post" enctype="multipart/form-data" class="wt-proposalamount-holder wt-send-project-proposal">
                              @csrf
                              <div class="wt-title">
                                 <h2>Proposal Amount</h2>
                              </div>
                              <div class="wt-proposalamount accordion">
                                 <div class="form-group">
                                    <span>(<i> Tk.</i> )</span>
                                    <input type="number" name="amount" class="form-control wt-proposal-amount" min="0" max="10000"  value="{{ old('amount') }}" placeholder="Enter Your Proposal Amount">
                                    <p class="text-danger" class="error">{{$errors->first('amount')}}</p>
                                    <a href="javascript:;" class="collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="lnr lnr-chevron-up"></i></a>
                                    <em>Total amount the client will see on your proposal</em>
                                 </div>
                                 <ul class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne">
                                    <li>
                                       <h3>(<i>Tk.</i> ) <em class="wt-project-cost"> {{$data->price_min}}৳  - {{$data->price_max}}৳ </em></h3>
                                       <span><strong>Employer’s proposed amount</strong></span>
                                    </li>
                                    <!-- <li>
                                       <h3>(<i> Tk.</i> ) <em class="wt-service-fee"> 00.00</em></h3>
                                       <span><strong>Your proposed amount</strong> </span>
                                    </li> -->
                                 </ul>
                              </div>
                              <div class="wt-formtheme wt-formproposal">
                                 <fieldset>
                                    <div class="form-group">
                                       <span class="wt-select">
                                          <select name="duration">
                                             <option value="">Select time period</option>
                                             <option value="Less than a week">Less than a week</option>
                                             <option value="Less than a month">Less than a month</option>
                                             <option value="01 to 03 months">01 to 03 months</option>
                                             <option value="03 to 06 months">03 to 06 months</option>
                                             <option value="More than 06 months">More than 06 months</option>
                                          </select>
                                          <p class="text-danger" class="error">{{$errors->first('duration')}}</p>

                                       </span>
                                    </div>
                                    <div class="form-group">
                                       <textarea name="description" class="form-control" placeholder="Add Description*"></textarea>
                                       <p class="text-danger" class="error">{{$errors->first('description')}}</p>
                                    </div>
                                 </fieldset>
                                 <div class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                    <fieldset>
                                       <div class="form-group form-group-label" id="wt-image-container-1426" style="position: relative;">
                                             <div class="wt-labelgroup">
                                                <input type="file"  name="proposal_file">
                                             </div>
                                             <p class="text-danger" class="error">{{$errors->first('proposal_file')}}</p>
                                       </div>
                                       <div class="wt-btnarea">
                                          <button type="submit" class="wt-btn" data-id="0" data-post="156">Send Now</button>
                                       </div>
                                    </fieldset>
                                 </div>

                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

               </div>
            </main>

@endsection
